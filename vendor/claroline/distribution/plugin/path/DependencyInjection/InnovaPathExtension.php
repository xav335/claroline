<?php

namespace Innova\PathBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Loads configuration for the Path Bundle.
 */
class InnovaPathExtension extends Extension
{
    /**
     * @see \Symfony\Component\DependencyInjection\Extension\ExtensionInterface::load()
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $locator = new FileLocator(__DIR__.'/../Resources/config/services');
        $loader = new YamlFileLoader($container, $locator);

        $loader->load('listeners.yml');
        $loader->load('managers.yml');
        $loader->load('controllers.yml');
        $loader->load('form_types.yml');
        $loader->load('importers.yml');

        return $this;
    }
}
