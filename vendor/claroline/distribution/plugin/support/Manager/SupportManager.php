<?php

namespace FormaLibre\SupportBundle\Manager;

use Claroline\CoreBundle\Entity\User;
use Claroline\CoreBundle\Manager\MailManager;
use Claroline\CoreBundle\Manager\UserManager;
use Claroline\CoreBundle\Pager\PagerFactory;
use Claroline\CoreBundle\Persistence\ObjectManager;
use FormaLibre\SupportBundle\Entity\Comment;
use FormaLibre\SupportBundle\Entity\Configuration;
use FormaLibre\SupportBundle\Entity\Intervention;
use FormaLibre\SupportBundle\Entity\Status;
use FormaLibre\SupportBundle\Entity\Ticket;
use FormaLibre\SupportBundle\Entity\Type;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * @DI\Service("formalibre.manager.support_manager")
 */
class SupportManager
{
    private $mailManager;
    private $om;
    private $pagerFactory;
    private $router;
    private $translator;
    private $userManager;

    private $configurationRepo;
    private $interventionRepo;
    private $statusRepo;
    private $ticketRepo;
    private $typeRepo;

    /**
     * @DI\InjectParams({
     *     "mailManager"  = @DI\Inject("claroline.manager.mail_manager"),
     *     "om"           = @DI\Inject("claroline.persistence.object_manager"),
     *     "pagerFactory" = @DI\Inject("claroline.pager.pager_factory"),
     *     "router"       = @DI\Inject("router"),
     *     "translator"   = @DI\Inject("translator"),
     *     "userManager"  = @DI\Inject("claroline.manager.user_manager")
     * })
     */
    public function __construct(
        MailManager $mailManager,
        ObjectManager $om,
        PagerFactory $pagerFactory,
        RouterInterface $router,
        TranslatorInterface $translator,
        UserManager $userManager
    ) {
        $this->mailManager = $mailManager;
        $this->om = $om;
        $this->pagerFactory = $pagerFactory;
        $this->router = $router;
        $this->translator = $translator;
        $this->userManager = $userManager;

        $this->configurationRepo = $om->getRepository('FormaLibreSupportBundle:Configuration');
        $this->interventionRepo = $om->getRepository('FormaLibreSupportBundle:Intervention');
        $this->statusRepo = $om->getRepository('FormaLibreSupportBundle:Status');
        $this->ticketRepo = $om->getRepository('FormaLibreSupportBundle:Ticket');
        $this->typeRepo = $om->getRepository('FormaLibreSupportBundle:Type');
    }

    public function persistTicket(Ticket $ticket)
    {
        $this->om->persist($ticket);
        $this->om->flush();
    }

    public function deleteTicket(Ticket $ticket)
    {
        $this->om->remove($ticket);
        $this->om->flush();
    }

    public function generateTicketNum(User $user)
    {
        $num = 1;
        $lastNum = $this->ticketRepo->findLastTicketNumByUser($user);

        if (!is_null($lastNum['ticket_num'])) {
            $num = $lastNum['ticket_num'] + 1;
        }

        return $num;
    }

    public function persistComment(Comment $comment)
    {
        $this->om->persist($comment);
        $this->om->flush();
    }

    public function deleteComment(Comment $comment)
    {
        $this->om->remove($comment);
        $this->om->flush();
    }

    public function persistType(Type $type)
    {
        $this->om->persist($type);
        $this->om->flush();
    }

    public function deleteType(Type $type)
    {
        $this->om->remove($type);
        $this->om->flush();
    }

    public function persistStatus(Status $status)
    {
        $this->om->persist($status);
        $this->om->flush();
    }

    public function deleteStatus(Status $status)
    {
        $this->om->remove($status);
        $this->om->flush();
    }

    public function persistIntervention(Intervention $intervention)
    {
        $this->om->persist($intervention);
        $this->om->flush();
    }

    public function deleteIntervention(Intervention $intervention)
    {
        $this->om->remove($intervention);
        $this->om->flush();
    }

    public function startTicket(Ticket $ticket, User $user)
    {
        $this->om->startFlushSuite();
        $ticket->setLevel(1);
        $startStatus = $this->getStatusByType(Status::STATUS_MANDATORY_START);
        $now = new \DateTime();

        foreach ($startStatus as $status) {
            $intervention = new Intervention();
            $intervention->setTicket($ticket);
            $intervention->setUser($user);
            $intervention->setStatus($status);
            $intervention->setStartDate($now);
            $intervention->setEndDate($now);
            $intervention->setDuration(0);
            $this->persistIntervention($intervention);
            $ticket->setStatus($status);
        }
        $this->persistTicket($ticket);
        $this->om->endFlushSuite();
    }

    public function reorderStatus(Status $status, $nextStatusId)
    {
        $allStatus = $this->getAllStatus();
        $nextId = intval($nextStatusId);
        $order = 1;
        $updated = false;

        foreach ($allStatus as $oneStatus) {
            if ($oneStatus === $status) {
                continue;
            } elseif ($oneStatus->getId() === $nextId) {
                $status->setOrder($order);
                $updated = true;
                $this->om->persist($status);
                ++$order;
                $oneStatus->setOrder($order);
                $this->om->persist($oneStatus);
                ++$order;
            } else {
                $oneStatus->setOrder($order);
                $this->om->persist($oneStatus);
                ++$order;
            }
        }

        if (!$updated) {
            $status->setOrder($order);
            $this->om->persist($status);
        }
        $this->om->flush();
    }

    public function getConfiguration()
    {
        $configs = $this->configurationRepo->findAll();

        if (count($configs) > 0) {
            $config = $configs[0];
        } else {
            $config = new Configuration();
            $details = [
                'with_credits' => false,
                'contacts' => [],
            ];
            $config->setDetails($details);
            $this->persistConfiguration($config);
        }

        return $config;
    }

    public function persistConfiguration(Configuration $config)
    {
        $this->om->persist($config);
        $this->om->flush();
    }

    public function getConfigurationCreditOption()
    {
        $config = $this->getConfiguration();
        $details = $config->getDetails();

        return isset($details['with_credits']) ? $details['with_credits'] : false;
    }

    public function getConfigurationContactsOption()
    {
        $config = $this->getConfiguration();
        $details = $config->getDetails();

        return isset($details['contacts']) ? $details['contacts'] : [];
    }

    public function sendTicketMail(User $user, Ticket $ticket, $type = '', Comment $comment = null)
    {
        $contactMail = null;
        $receivers = [];
        $extra = [];

        switch ($type) {
            case 'new_ticket':
                $contactIds = $this->getConfigurationContactsOption();
                $contactMail = $ticket->getContactMail();

                if (count($contactIds) > 0) {
                    $receivers = $this->userManager->getUsersByIds($contactIds);
                    $subject = '['.
                        $this->translator->trans('new_ticket', [], 'support').
                        ']['.
                        $user->getFirstName().
                        ' '.
                        $user->getLastName().
                        '] '.
                        $ticket->getTitle();
                    $content = $ticket->getDescription().
                        '<br><br>'.
                        $this->translator->trans('mail', [], 'platform').
                        ' : '.
                        $ticket->getContactMail().
                        '<br>'.
                        $this->translator->trans('phone', [], 'platform').
                        ' : '.
                        $ticket->getContactPhone().
                        '<br><br>';
                }
                break;

            case 'ticket_edition':
                $contactIds = $this->getConfigurationContactsOption();
                $contactMail = $ticket->getContactMail();

                if (count($contactIds) > 0) {
                    $receivers = $this->userManager->getUsersByIds($contactIds);
                    $subject = '['.
                        $this->translator->trans('ticket_edition', [], 'support').
                        ']['.
                        $user->getFirstName().
                        ' '.
                        $user->getLastName().
                        '] '.
                        $ticket->getTitle();
                    $content = $ticket->getDescription().
                        '<br><br>'.
                        $this->translator->trans('mail', [], 'platform').
                        ' : '.
                        $ticket->getContactMail().
                        '<br>'.
                        $this->translator->trans('phone', [], 'platform').
                        ' : '.
                        $ticket->getContactPhone().
                        '<br><br>';
                }
                break;

            case 'ticket_deletion':
                $contactIds = $this->getConfigurationContactsOption();

                if (count($contactIds) > 0) {
                    $receivers = $this->userManager->getUsersByIds($contactIds);
                    $subject = '['.
                        $this->translator->trans('ticket_deletion', [], 'support').
                        ']['.
                        $user->getFirstName().
                        ' '.
                        $user->getLastName().
                        '] '.
                        $ticket->getTitle();
                    $content = $this->translator->trans('ticket_deletion', [], 'support').
                        '<br><br>';
                }
                break;

            case 'new_admin_comment':
                $extra['to'] = [$ticket->getContactMail()];

                if (!is_null($comment)) {
                    $subject = '['.
                        $this->translator->trans('new_comment', [], 'support').
                        ']['.
                        $this->translator->trans('ticket', [], 'support').
                        ' #'.
                        $ticket->getNum().
                        '] '.
                        $ticket->getTitle();
                    $content = $comment->getContent().'<br><br>';
                }
                break;

            case 'new_comment':
                $contactIds = $this->getConfigurationContactsOption();
                $contactMail = $ticket->getContactMail();

                if (count($contactIds) > 0 && !is_null($comment)) {
                    $receivers = $this->userManager->getUsersByIds($contactIds);
                    $subject = '['.
                        $this->translator->trans('new_comment', [], 'support').
                        ']['.
                        $user->getFirstName().
                        ' '.
                        $user->getLastName().
                        '] '.
                        $ticket->getTitle();
                    $content = $comment->getContent().
                        '<br><br>'.
                        $this->translator->trans('mail', [], 'platform').
                        ' : '.
                        $ticket->getContactMail().
                        '<br>'.
                        $this->translator->trans('phone', [], 'platform').
                        ' : '.
                        $ticket->getContactPhone().
                        '<br><br>';
                }
                break;

            default:
                break;
        }

        if (count($receivers) > 0 || count($extra) > 0) {
            $this->mailManager->send($subject, $content, $receivers, null, $extra, false, $contactMail);
        }
    }

    /**************************************
     * Access to TicketRepository methods *
     **************************************/

    public function getAllTickets(
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findAllTickets($orderedBy, $order) :
            $this->ticketRepo->findAllSearchedTickets($search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getTicketsByUser(
        User $user,
        $search = '',
        $orderedBy = 'num',
        $order = 'ASC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findTicketsByUser($user, $orderedBy, $order) :
            $this->ticketRepo->findSearchedTicketByUser($user, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getTicketsByLevel(
        Type $type,
        $level,
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findTicketsByLevel($type, $level, $orderedBy, $order) :
            $this->ticketRepo->findSearchedTicketsByLevel($type, $level, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getTicketsByInterventionUser(
        Type $type,
        User $user,
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findTicketsByInterventionUser($type, $user, $orderedBy, $order) :
            $this->ticketRepo->findSearchedTicketsByInterventionUser($type, $user, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getActiveTicketsByInterventionUser(
        Type $type,
        User $user,
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findActiveTicketsByInterventionUser($type, $user, $orderedBy, $order) :
            $this->ticketRepo->findSearchedActiveTicketsByInterventionUser($type, $user, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getTicketsWithoutIntervention(
        Type $type,
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findTicketsWithoutIntervention($type, $orderedBy, $order) :
            $this->ticketRepo->findSearchedTicketsWithoutIntervention($type, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getTicketsWithoutInterventionByLevel(
        $level,
        Type $type,
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findTicketsWithoutInterventionByLevel($level, $type, $orderedBy, $order) :
            $this->ticketRepo->findSearchedTicketsWithoutInterventionByLevel($level, $type, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    public function getTicketsByInterventionStatus(
        Type $type,
        $status,
        $search = '',
        $orderedBy = 'creationDate',
        $order = 'DESC',
        $withPager = true,
        $page = 1,
        $max = 50
    ) {
        $tickets = empty($search) ?
            $this->ticketRepo->findTicketsByInterventionStatus($type, $status, $orderedBy, $order) :
            $this->ticketRepo->findSearchedTicketsByInterventionStatus($type, $status, $search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($tickets, $page, $max) :
            $tickets;
    }

    /************************************
     * Access to TypeRepository methods *
     ************************************/

    public function getAllTypes(
        $search = '',
        $orderedBy = 'name',
        $order = 'ASC',
        $withPager = false,
        $page = 1,
        $max = 50
    ) {
        $types = empty($search) ?
            $this->typeRepo->findAllTypes($orderedBy, $order) :
            $this->typeRepo->findAllSearchedTypes($search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($types, $page, $max) :
            $types;
    }

    public function getOneTypeByName($name)
    {
        return $this->typeRepo->findOneByName($name);
    }

    /**************************************
     * Access to StatusRepository methods *
     **************************************/

    public function getAllStatus(
        $search = '',
        $orderedBy = 'order',
        $order = 'ASC',
        $withPager = false,
        $page = 1,
        $max = 50
    ) {
        $status = empty($search) ?
            $this->statusRepo->findAllStatus($orderedBy, $order) :
            $this->statusRepo->findAllSearchedStatus($search, $orderedBy, $order);

        return $withPager ?
            $this->pagerFactory->createPagerFromArray($status, $page, $max) :
            $status;
    }

    public function getStatusByType($type, $orderedBy = 'order', $order = 'ASC')
    {
        return $this->statusRepo->findStatusByType($type, $orderedBy, $order);
    }

    public function getOrderOfLastStatus()
    {
        return $this->statusRepo->findOrderOfLastStatus();
    }

    /********************************************
     * Access to InterventionRepository methods *
     ********************************************/

    public function getUnfinishedInterventionByTicket(
        Ticket $ticket,
        $orderedBy = 'startDate',
        $order = 'ASC'
    ) {
        return $this->interventionRepo->findUnfinishedInterventionByTicket(
            $ticket,
            $orderedBy,
            $order
        );
    }
}
