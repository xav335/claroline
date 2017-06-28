<?php

namespace Innova\PathBundle\EventListener\Widget;

use Claroline\CoreBundle\Event\ConfigureWidgetEvent;
use Claroline\CoreBundle\Event\DisplayWidgetEvent;
use Claroline\TagBundle\Manager\TagManager;
use Innova\PathBundle\Manager\PathManager;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * Manages Path widgets.
 *
 * @DI\Service()
 */
class PathWidgetListener
{
    /**
     * @var \Symfony\Bundle\TwigBundle\TwigEngine
     */
    private $twig;

    /**
     * @var \Claroline\CoreBundle\Form\Factory\FormFactory
     */
    private $formFactory;

    /**
     * @var \Innova\PathBundle\Manager\PathManager
     */
    private $pathManager;

    /**
     * @var \Claroline\TagBundle\Manager\TagManager
     */
    private $tagManager;

    /**
     * @DI\InjectParams({
     *     "twig"        = @DI\Inject("templating"),
     *     "formFactory" = @DI\Inject("form.factory"),
     *     "pathManager" = @DI\Inject("innova_path.manager.path"),
     *     "tagManager"  = @DI\Inject("claroline.manager.tag_manager")
     * })
     */
    public function __construct(
        TwigEngine           $twig,
        FormFactoryInterface $formFactory,
        PathManager          $pathManager,
        TagManager           $tagManager)
    {
        $this->twig = $twig;
        $this->formFactory = $formFactory;
        $this->pathManager = $pathManager;
        $this->tagManager = $tagManager;
    }

    /**
     * @DI\Observe("widget_innova_path_widget")
     *
     * @param DisplayWidgetEvent $event
     */
    public function onDisplay(DisplayWidgetEvent $event)
    {
        $widgetInstance = $event->getInstance();
        $workspace = $widgetInstance->getWorkspace();

        $config = $this->pathManager->getWidgetConfig($widgetInstance);

        $content = $this->twig->render('InnovaPathBundle:Widget:list.html.twig', [
            'workspace' => $workspace,
            'isDesktop' => $widgetInstance->isDesktop(),
            'paths' => $this->pathManager->getWidgetPaths($config, $workspace),
        ]);

        $event->setContent($content);
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("widget_innova_path_widget_configuration")
     *
     * @param ConfigureWidgetEvent $event
     */
    public function onConfigure(ConfigureWidgetEvent $event)
    {
        $instance = $event->getInstance();
        $config = $this->pathManager->getWidgetConfig($instance);

        $form = $this->formFactory->create('innova_path_widget_config', $config);
        $content = $this->twig->render(
            'InnovaPathBundle:Widget:config.html.twig',
            [
                'form' => $form->createView(),
                'instance' => $instance,
                'tags' => $this->tagManager->getPlatformTags(),
            ]
        );

        $event->setContent($content);
        $event->stopPropagation();
    }
}
