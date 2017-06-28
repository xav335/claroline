<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\LdapBundle\Controller;

use Claroline\LdapBundle\Form\LdapType;
use Claroline\LdapBundle\Manager\LdapManager;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;
use JMS\DiExtraBundle\Annotation as DI;
use JMS\SecurityExtraBundle\Annotation as SEC;

/**
 * @DI\Tag("security.secure_service")
 * @SEC\PreAuthorize("canOpenAdminTool('administration_tool_ldap')")
 */
class LdapController extends Controller
{
    private $ldap;
    private $request;
    private $formFactory;
    private $translator;

    /**
     * @InjectParams({
     *     "ldap"               = @Inject("claroline.ldap_bundle.manager.ldap_manager"),
     *     "request"            = @Inject("request_stack"),
     *     "formFactory"        = @Inject("form.factory"),
     *     "translator"         = @Inject("translator"),
     *     "templating"         = @Inject("templating")
     * })
     */
    public function __construct(
        LdapManager $ldap,
        FormFactory $formFactory,
        RequestStack $request,
        TranslatorInterface $translator,
        EngineInterface $templating
    ) {
        $this->ldap = $ldap;
        $this->request = $request->getMasterRequest();
        $this->formFactory = $formFactory;
        $this->translator = $translator;
        $this->templating = $templating;
    }

    /**
     * @Route("/", name="claro_admin_ldap")
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function menuAction()
    {
        return array();
    }

    /**
     * @Route("/settings", name="claro_admin_ldap_settings")
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function settingsAction()
    {
        $config = $this->ldap->getConfig();
        $servers = isset($config['servers']) ? $config['servers'] : null;
        $userCreation = isset($config['userCreation']) ? $config['userCreation'] : null;

        return array('servers' => $servers, 'userCreation' => $userCreation);
    }

    /**
     * @Route("/form/{name}", name="claro_admin_ldap_form", options = {"expose"=true})
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function formAction($name = null)
    {
        $form = $this->formFactory->create(new LdapType(), $this->ldap->get($name));

        if ($this->request->getMethod() === 'POST' && $form->handleRequest($this->request) && $form->isValid()) {
            $data = $form->getData();

            if ($this->ldap->exists($name, $data)) {
                $form->addError(new FormError($this->translator->trans('ldap_already_exists', array(), 'ldap')));
            } else {
                $user = isset($data['user']) ? $data['user'] : null;
                $password = isset($data['password']) ? $data['password'] : null;

                if (!$this->ldap->connect($data, $user, $password)) {
                    $form->addError(new FormError($this->translator->trans('ldap_cant_connect', array(), 'ldap')));
                } else {
                    $this->ldap->saveConfig($data);
                    $this->ldap->deleteIfReplace($name, $data);

                    return new Response('true');
                }
            }
        }

        return array('form' => $form->createView(), 'name' => $name);
    }

    /**
     * @Route("/delte/{name}", name="claro_admin_ldap_delete", options = {"expose"=true})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($name)
    {
        if ($name && $this->ldap->deleteServer($name)) {
            return new Response('true');
        }

        return new Response('false');
    }

    /**
     * @Route("/config/menu", name="claro_admin_ldap_servers", options = {"expose"=true})
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function serversAction()
    {
        return array('servers' => $this->ldap->getConfig()['servers']);
    }

    /**
     * @Route("/config/users/{name}", name="claro_admin_ldap_users")
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function usersAction($name)
    {
        $users = array();
        $server = $this->ldap->get($name);
        $user = isset($server['user']) ? $server['user'] : null;
        $password = isset($server['password']) ? $server['password'] : null;

        if ($this->ldap->connect($server, $user, $password)) {
            $classes = $this->ldap->getClasses($server);
            $users = $this->ldap->getUsers($server);
            $this->ldap->close();

            return array(
                'server' => $server,
                'users' => $users,
                'usersJSON' => json_encode($users),
                'classes' => $classes,
            );
        }

        return array('error' => true);
    }

    /**
     * @Route("/config/groups/{name}", name="claro_admin_ldap_groups")
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function groupsAction($name)
    {
        $server = $this->ldap->get($name);
        $user = isset($server['user']) ? $server['user'] : null;
        $password = isset($server['password']) ? $server['password'] : null;

        if ($this->ldap->connect($server, $user, $password)) {
            $classes = $this->ldap->getClasses($server);
            $groups = $this->ldap->getGroups($server);
            $this->ldap->close();

            return array(
                'server' => $server,
                'groups' => $groups,
                'groupsJSON' => json_encode($groups),
                'classes' => $classes,
            );
        }

        return array('error' => true);
    }

    /**
     * @Route("/export", name="claro_admin_ldap_export")
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function exportAction()
    {
        return array('servers' => $this->ldap->getConfig()['servers']);
    }

    /**
     * @Route("/preview/{type}/{name}", name="claro_admin_ldap_export_preview", options = {"expose"=true})
     * @Template
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function previewAction($type, $name)
    {
        $users = array();
        $server = $this->ldap->get($name);
        $user = isset($server['user']) ? $server['user'] : null;
        $password = isset($server['password']) ? $server['password'] : null;

        if ($this->ldap->connect($server, $user, $password)) {
            $users = $this->ldap->getUsers($server);
            $this->ldap->close();

            return array(
                'mapping' => $this->ldap->userMapping($server),
                'type' => $type,
                'users' => $users,
                'server' => $server,
            );
        }

        return array('error' => true);
    }

    /**
     * @Route("
     *    /export/{name}.{type}", name="claro_admin_ldap_export_export_file", options = {"expose"=true})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function exportFileAction($type, $name)
    {
        $users = array();
        $server = $this->ldap->get($name);
        $user = isset($server['user']) ? $server['user'] : null;
        $password = isset($server['password']) ? $server['password'] : null;

        if ($this->ldap->userMapping($server) && $this->ldap->connect($server, $user, $password)) {
            $users = $this->ldap->getUsers($server);
            $this->ldap->close();

            $response = new response(
                $this->templating->render(
                    'ClarolineLdapBundle:export:'.$type.'.html.twig',
                    array('users' => $users, 'server' => $server)
                )
            );
        } else {
            $response = new Response('Error');
        }

        $response->headers->set('Content-Transfer-Encoding', 'octet-stream');
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$name.'.'.$type);
        //$response->headers->set('Content-Type', $mimeType);
        $response->headers->set('Connection', 'close');

        return $response;
    }

    /**
     * @Route("/config/save/settings", name="claro_admin_ldap_save_settings", options = {"expose"=true})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function saveSettingsAction()
    {
        if ($this->ldap->saveSettings($this->request->request->all())) {
            return new Response('true');
        }

        return new Response('false');
    }

    /**
     * @Route("/get/users/{objectClass}/{name}", name="claro_admin_ldap_get_entries", options = {"expose"=true})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getEntriesAction($objectClass, $name)
    {
        $entries = array();
        $server = $this->ldap->get($name);
        $user = isset($server['user']) ? $server['user'] : null;
        $password = isset($server['password']) ? $server['password'] : null;

        if ($this->ldap->connect($server, $user, $password)) {
            if ($search = $this->ldap->search($this->ldap->get($name), '(&(objectClass='.$objectClass.'))')) {
                $entries = $this->ldap->getEntries($search);
            }

            $this->ldap->close();
        }

        return new Response(json_encode($entries));
    }
}
