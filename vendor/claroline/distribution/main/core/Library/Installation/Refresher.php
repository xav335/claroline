<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\Library\Installation;

use Composer\Script\CommandEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand;
use Symfony\Bundle\AsseticBundle\Command\DumpCommand;
use JMS\DiExtraBundle\Annotation as DI;
use Bazinga\Bundle\JsTranslationBundle\Command\DumpCommand as TranslationDumpCommand;
use Claroline\CoreBundle\Library\Utilities\FileSystem;

/**
 * @DI\Service("claroline.installation.refresher")
 */
class Refresher
{
    private $container;
    private $output;

    /**
     * @DI\InjectParams({
     *     "container" = @DI\Inject("service_container")
     * })
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function setOutput(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function refresh($environment, $clearCache = true)
    {
        $this->installAssets();
        $this->dumpAssets($environment);

        if ($clearCache) {
            $this->clearCache($environment);
        }
    }

    public function installAssets()
    {
        $webDir = "{$this->container->get('kernel')->getRootDir()}/../web";
        $args = array('target' => $webDir);
        $assetInstallCmd = new AssetsInstallCommand();
        $assetInstallCmd->setContainer($this->container);
        $assetInstallCmd->run(new ArrayInput($args), $this->output ?: new NullOutput());
    }

    public function dumpAssets($environment)
    {
        if ($this->output) {
            $this->output->writeln('Dumping translations...');
        }
        $translationDumpCommand = new TranslationDumpCommand();
        $translationDumpCommand->setContainer($this->container);
        $translationDumpCommand->run(new ArrayInput(array()), $this->output ?: new NullOutput());
        if ($this->output) {
            $this->output->writeln('Compiling javascripts...');
        }
        $assetDumpCmd = new DumpCommand();
        $assetDumpCmd->setContainer($this->container);
        $assetDumpCmd->getDefinition()->addOption(
            new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'Env', $environment)
        );
        $assetDumpCmd->run(new ArrayInput(array()), $this->output ?: new NullOutput());
    }

    public function clearCache($environment = null)
    {
        if ($this->output) {
            $this->output->writeln('Clearing the cache...');
        }

        $baseCacheDir = "{$this->container->get('kernel')->getRootDir()}/cache";
        $cacheDir = $environment === null ? $baseCacheDir : "{$baseCacheDir}/{$environment}";
        static::removeContentFrom($cacheDir);
    }

    public static function deleteCache(CommandEvent $event)
    {
        $options = array_merge(
            array('symfony-app-dir' => 'app'),
            $event->getComposer()->getPackage()->getExtra()
        );

        $cacheDir = $options['symfony-app-dir'].'/cache';
        $event->getIO()->write('Clearing the cache...');
        static::removeContentFrom($cacheDir);
    }

    public static function removeContentFrom($directory)
    {
        if (is_dir($directory)) {
            $fileSystem = new Filesystem();
            $cacheIterator = new \DirectoryIterator($directory);

            foreach ($cacheIterator as $item) {
                if (!$item->isDot() && '.gitkeep' !== $item->getFilename()) {
                    $fileSystem->remove($item->getPathname());
                }
            }
        }
    }
}
