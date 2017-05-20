<?php

namespace Innova\PathBundle\Form;

class PathTemplateType extends AbstractPathType
{
    public function getName()
    {
        return 'innova_path_template';
    }

    public function getDefaultOptions()
    {
        return [
            'data_class' => 'Innova\PathBundle\Entity\Path\PathTemplate',
        ];
    }
}
