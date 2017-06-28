<?php

/*
 * This file is part of the JVal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JVal\Constraint;

use JVal\Context;
use JVal\Walker;
use stdClass;

/**
 * Constraint for the "oneOf" keyword.
 */
class OneOfConstraint extends AbstractOfConstraint
{
    /**
     * {@inheritdoc}
     */
    public function keywords()
    {
        return ['oneOf'];
    }

    /**
     * {@inheritdoc}
     */
    public function apply($instance, stdClass $schema, Context $context, Walker $walker)
    {
        $accumulatingContext = $context->duplicate(false);
        $hasMatch = false;
        $hasDoubleMatch = false;

        foreach ($schema->oneOf as $subSchema) {
            $subContext = $context->duplicate(false);
            $walker->applyConstraints($instance, $subSchema, $subContext);

            if ($subContext->countViolations() === 0) {
                if (!$hasMatch) {
                    $hasMatch = true;
                } else {
                    $hasDoubleMatch = true;
                    break;
                }
            } else {
                $accumulatingContext->mergeViolations($subContext);
            }
        }

        if (!$hasMatch) {
            $context->mergeViolations($accumulatingContext);
        }

        if (!$hasMatch || $hasDoubleMatch) {
            $context->addViolation('instance must match exactly one of the schemas listed in oneOf');
        }
    }
}
