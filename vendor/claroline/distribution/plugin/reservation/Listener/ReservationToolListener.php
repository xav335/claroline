<?php

namespace FormaLibre\ReservationBundle\Listener;

use Claroline\CoreBundle\Event\DisplayToolEvent;
use Claroline\CoreBundle\Event\GenericDatasEvent;
use Doctrine\ORM\EntityManager;
use FormaLibre\ReservationBundle\Controller\ReservationController;
use FormaLibre\ReservationBundle\Manager\ReservationManager;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Claroline\CoreBundle\Event\OpenAdministrationToolEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 *  @DI\Service()
 */
class ReservationToolListener
{
    private $request;
    private $httpKernel;
    private $templating;
    private $em;
    private $reservationManager;
    private $tokenStorage;

    /**
     * @DI\InjectParams({
     *      "requestStack"  = @DI\Inject("request_stack"),
     *      "httpKernel"    = @DI\Inject("http_kernel"),
     *      "templating"    = @DI\Inject("templating"),
     *      "em"            = @DI\Inject("doctrine.orm.entity_manager"),
     *      "reservationManager" = @DI\Inject("formalibre.manager.reservation_manager"),
     *      "tokenStorage"       = @DI\Inject("security.token_storage")
     * })
     */
    public function __construct(
        RequestStack $requestStack,
        HttpKernelInterface $httpKernel,
        TwigEngine $templating,
        EntityManager $em,
        ReservationManager $reservationManager,
        TokenStorageInterface $tokenStorage
    ) {
        $this->request = $requestStack->getCurrentRequest();
        $this->httpKernel = $httpKernel;
        $this->templating = $templating;
        $this->em = $em;
        $this->reservationManager = $reservationManager;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @DI\Observe("administration_tool_formalibre_reservation_tool")
     *
     * @param OpenAdministrationToolEvent $event
     */
    public function onOpenEvent(OpenAdministrationToolEvent $event)
    {
        $params = array();
        $params['_controller'] = 'FormaLibreReservationBundle:ReservationAdmin:index';
        $this->redirect($params, $event);
    }

    private function redirect($params, $event)
    {
        $subRequest = $this->request->duplicate(array(), null, $params);
        $response = $this->httpKernel->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
        $event->setResponse($response);
        $event->stopPropagation();
    }

    /**
     * @DI\Observe("open_tool_desktop_formalibre_reservation_agenda")
     *
     * @param DisplayToolEvent $event
     */
    public function onDisplayDesktopReservationAgenda(DisplayToolEvent $event)
    {
        $resourcesTypes = $this->em->getRepository('FormaLibreReservationBundle:ResourceType')->findAll();

        foreach ($resourcesTypes as $resourcesTypeKey => $resourcesType) {
            foreach ($resourcesType->getResources() as $resourceKey => $resource) {
                if (!$this->reservationManager->hasAccess($this->tokenStorage->getToken()->getUser(), $resource, ReservationController::SEE)) {
                    $resourcesType->removeResource($resource);
                }
            }
        }

        $event->setContent($this->templating->render('FormaLibreReservationBundle:Tool:reservationAgenda.html.twig', ['resourcesType' => $resourcesTypes]));
    }

    /**
     * @DI\Observe("formalibre_delete_event_from_resource")
     */
    public function onResourceDeleted(GenericDatasEvent $event)
    {
        $resource = $event->getDatas()->getDatas();

        foreach ($resource->getReservations() as $reservation) {
            $this->em->remove($reservation->getEvent());
        }
        $this->em->flush();

        $event->stopPropagation();
    }
}
