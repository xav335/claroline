<?php

namespace UJM\ExoBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use UJM\ExoBundle\DependencyInjection\Compiler\QuestionDefinitionsPass;
use UJM\ExoBundle\Installation\AdditionalInstaller;

class UJMExoBundle extends PluginBundle
{
    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();

        return $config->addRoutingResource(__DIR__.'/Resources/config/routing.yml');
    }

    public function getAdditionalInstaller()
    {
        return new AdditionalInstaller();
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new QuestionDefinitionsPass());
    }
}
