<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CursusBundle\Form;

use Claroline\CursusBundle\Entity\CourseSession;
use Claroline\CursusBundle\Manager\CursusManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraints\Range;

class CourseSessionEditType extends AbstractType
{
    private $cursusManager;
    private $session;
    private $translator;

    public function __construct(
        CourseSession $session,
        CursusManager $cursusManager,
        TranslatorInterface $translator
    ) {
        $this->cursusManager = $cursusManager;
        $this->session = $session;
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $workspace = $this->session->getWorkspace();
        $validatorsRoles = $this->cursusManager->getValidatorsRoles();

        $builder->add(
            'name',
            'text',
            ['required' => true]
        );
        $attr = [];
        $attr['class'] = 'datepicker input-small';
        $attr['data-date-format'] = 'dd-mm-yyyy';
        $attr['autocomplete'] = 'off';
        $builder->add(
            'start_date',
            'datepicker',
            [
                'required' => false,
                'format' => 'dd-MM-yyyy',
                'widget' => 'single_text',
                'attr' => $attr,
                'input' => 'datetime',
            ]
        );
        $builder->add(
            'end_date',
            'datepicker',
            [
                'required' => false,
                'format' => 'dd-MM-yyyy',
                'widget' => 'single_text',
                'attr' => $attr,
                'input' => 'datetime',
            ]
        );
        $builder->add(
            'sessionStatus',
            'choice',
            [
                'required' => true,
                'choices' => [
                    0 => 'session_not_started',
                    1 => 'session_open',
                    2 => 'session_closed',
                ],
            ]
        );
        $builder->add(
            'defaultSession',
            'checkbox',
            ['required' => true]
        );
        $builder->add(
            'publicRegistration',
            'checkbox',
            ['required' => true]
        );
        $builder->add(
            'publicUnregistration',
            'checkbox',
            ['required' => true]
        );

        if (!is_null($workspace)) {
            $builder->add(
                'learnerRole',
                'entity',
                [
                    'required' => true,
                    'class' => 'ClarolineCoreBundle:Role',
                    'query_builder' => function (EntityRepository $er) use ($workspace) {

                        return $er->createQueryBuilder('r')
                            ->join('r.workspace', 'w')
                            ->where('w.id = :workspaceId')
                            ->setParameter('workspaceId', $workspace->getId())
                            ->orderBy('r.translationKey', 'ASC');
                    },
                    'property' => 'translationKey',
                    'choice_translation_domain' => true,
                ]
            );
            $builder->add(
                'tutorRole',
                'entity',
                [
                    'required' => true,
                    'class' => 'ClarolineCoreBundle:Role',
                    'query_builder' => function (EntityRepository $er) use ($workspace) {

                        return $er->createQueryBuilder('r')
                            ->join('r.workspace', 'w')
                            ->where('w.id = :workspaceId')
                            ->setParameter('workspaceId', $workspace->getId())
                            ->orderBy('r.translationKey', 'ASC');
                    },
                    'property' => 'translationKey',
                    'choice_translation_domain' => true,
                ]
            );
        }
        $builder->add(
            'cursus',
            'entity',
            [
                'required' => false,
                'class' => 'ClarolineCursusBundle:Cursus',
                'query_builder' => function (EntityRepository $er) {

                    return $er->createQueryBuilder('c')
                        ->where('c.parent IS NULL')
                        ->orderBy('c.title', 'ASC');
                },
                'property' => 'title',
                'multiple' => true,
                'expanded' => true,
            ]
        );
        $builder->add(
            'maxUsers',
            'integer',
            [
                'required' => false,
                'constraints' => [
                    new Range(['min' => 0]),
                ],
                'attr' => ['min' => 0],
                'label' => 'max_users',
            ]
        );
        $builder->add(
            'userValidation',
            'checkbox',
            [
                'required' => true,
                'label' => 'user_validation',
            ]
        );
        $builder->add(
            'organizationValidation',
            'checkbox',
            [
                'required' => true,
                'label' => 'organization_validation',
            ]
        );
        $builder->add(
            'registrationValidation',
            'checkbox',
            ['required' => true]
        );
        $builder->add(
            'validators',
            'userpicker',
            [
                'required' => false,
                'picker_name' => 'validators-picker',
                'picker_title' => $this->translator->trans('validators_selection', [], 'cursus'),
                'multiple' => true,
                'attach_name' => false,
                'forced_roles' => $validatorsRoles,
                'label' => $this->translator->trans('validators', [], 'cursus'),
            ]
        );
    }

    public function getName()
    {
        return 'course_session_form';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(['translation_domain' => 'cursus']);
    }
}
