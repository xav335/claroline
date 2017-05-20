<?php

namespace Innova\PathBundle\Controller;

use Innova\PathBundle\Entity\Path\PathTemplate;
use Innova\PathBundle\Manager\PathTemplateManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
// Controller dependencies
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class PathTemplateController.
 *
 * @category   Controller
 *
 * @author     Innovalangues <contact@innovalangues.net>
 * @copyright  2013 Innovalangues
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 *
 * @version    0.1
 *
 * @link       http://innovalangues.net
 * 
 * @Route(
 *      "/template",
 *      name    = "innova_path_template",
 *      service = "innova_path.controller.path_template"
 * )
 */
class PathTemplateController
{
    /**
     * Form factory.
     *
     * @var \Symfony\Component\Form\FormFactoryInterface
     */
    protected $formFactory;

    /**
     * Path template manager.
     *
     * @var \Innova\PathBundle\Manager\PathTemplateManager
     */
    protected $pathTemplateManager;

    /**
     * Class constructor
     * Inject needed dependencies.
     *
     * @param \Symfony\Component\Form\FormFactoryInterface   $formFactory
     * @param \Innova\PathBundle\Manager\PathTemplateManager $pathTemplateManager
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        PathTemplateManager  $pathTemplateManager)
    {
        $this->formFactory = $formFactory;
        $this->pathTemplateManager = $pathTemplateManager;
    }

    /**
     * Get all templates.
     *
     * @return JsonResponse
     * 
     * @Route(
     *     "",
     *     name    = "innova_path_template_list",
     *     options = { "expose" = true }
     * )
     * @Method("GET")
     */
    public function indexAction()
    {
        $templates = $this->pathTemplateManager->findAll();

        return new JsonResponse($templates);
    }

    /**
     * Create a new template.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * 
     * @Route(
     *     "/",
     *     name    = "innova_path_template_create",
     *     options = { "expose" = true }
     * )
     * @Method("POST")
     */
    public function addAction(Request $request)
    {
        $pathTemplate = new PathTemplate();

        // Create form to validate data
        $form = $this->formFactory->create('innova_path_template', $pathTemplate, [
            'csrf_protection' => false,
        ]);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->pathTemplateManager->create($pathTemplate);

            return new Response(
                $pathTemplate->getId()
            );
        }

        return new Response('error');
    }

    /**
     * Edit existing template.
     *
     * @param \Innova\PathBundle\Entity\Path\PathTemplate $pathTemplate
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route(
     *     "/{id}",
     *     name    = "innova_path_template_update",
     *     options = { "expose" = true }
     * )
     * @Method("PUT")
     */
    public function editAction(PathTemplate $pathTemplate, Request $request)
    {
        // Create form to validate data
        $form = $this->formFactory->create('innova_path_template', $pathTemplate, [
            'method' => 'PUT',
            'csrf_protection' => false,
        ]);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->pathTemplateManager->edit($pathTemplate);

            return new Response(
                $pathTemplate->getId()
            );
        }

        return new Response('error');
    }

    /**
     * Delete template.
     *
     * @param \Innova\PathBundle\Entity\Path\PathTemplate $pathTemplate
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route(
     *     "/delete/{id}",
     *     name    = "innova_path_template_delete",
     *     options = { "expose" = true }
     * )
     * @Method("DELETE")
     */
    public function deleteAction(PathTemplate $pathTemplate)
    {
        try {
            // Try to remove template
            $this->pathTemplateManager->delete($pathTemplate);

            $processed = 'success';
        } catch (\Exception $e) {
            // Error
            $processed = 'error';
        }

        return new Response($processed);
    }
}
