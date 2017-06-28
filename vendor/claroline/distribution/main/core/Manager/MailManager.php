<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\Manager;

use Claroline\CoreBundle\Entity\User;
use Claroline\CoreBundle\Event\RefreshCacheEvent;
use Claroline\CoreBundle\Library\Configuration\PlatformConfigurationHandler;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * @DI\Service("claroline.manager.mail_manager")
 */
class MailManager
{
    private $router;
    private $mailer;
    private $translator;
    private $container;
    private $ch;
    private $cacheManager;
    private $contentManager;

    /**
     * @DI\InjectParams({
     *     "router"         = @DI\Inject("router"),
     *     "mailer"         = @DI\Inject("mailer"),
     *     "ch"             = @DI\Inject("claroline.config.platform_config_handler"),
     *     "container"      = @DI\Inject("service_container"),
     *     "cacheManager"   = @DI\Inject("claroline.manager.cache_manager"),
     *     "contentManager" = @DI\Inject("claroline.manager.content_manager")
     * })
     */
    public function __construct(
        \Swift_Mailer $mailer,
        UrlGeneratorInterface $router,
        TranslatorInterface $translator,
        PlatformConfigurationHandler $ch,
        ContainerInterface $container,
        CacheManager $cacheManager,
        ContentManager $contentManager
    ) {
        $this->router = $router;
        $this->mailer = $mailer;
        $this->translator = $translator;
        $this->container = $container;
        $this->ch = $ch;
        $this->cacheManager = $cacheManager;
        $this->contentManager = $contentManager;
    }

    /**
     * @return bool
     */
    public function isMailerAvailable()
    {
        return $this->cacheManager->getParameter('is_mailer_available') && $this->getMailerFrom();
    }

    /**
     * @param \Claroline\CoreBundle\Entity\User $user
     *
     * @return bool
     */
    public function sendForgotPassword(User $user)
    {
        $this->container->get('claroline.manager.user_manager')->initializePassword($user);
        $hash = $user->getResetPasswordHash();
        $link = $this->router->generate('claro_security_reset_password', ['hash' => $hash], true);
        $subject = $this->translator->trans('resetting_your_password', [], 'platform');

        $body = $this->container->get('templating')->render(
            'ClarolineCoreBundle:Mail:forgotPassword.html.twig', ['user' => $user, 'link' => $link]
        );

        return $this->send($subject, $body, [$user], null, [], true);
    }

    public function sendInitPassword(User $user)
    {
        $this->container->get('claroline.manager.user_manager')->initializePassword($user);
        $hash = $user->getResetPasswordHash();
        $link = $this->router->generate('claro_security_reset_password', ['hash' => $hash], true);
        $subject = $this->translator->trans('initialize_your_password', [], 'platform');

        $body = $this->container->get('templating')->render(
            'ClarolineCoreBundle:Mail:initialize_password.html.twig', ['user' => $user, 'link' => $link]
        );

        return $this->send($subject, $body, [$user], null, [], true);
    }

    public function sendEnableAccountMessage(User $user)
    {
        $hash = $user->getResetPasswordHash();
        $link = $this->router->generate('claro_security_activate_user', ['hash' => $hash], true);
        $subject = $this->translator->trans('activate_account', [], 'platform');

        $body = $this->container->get('templating')->render(
            'ClarolineCoreBundle:Mail:activateUser.html.twig', ['user' => $user, 'link' => $link]
        );

        return $this->send($subject, $body, [$user], null, [], true);
    }

    public function sendValidateEmail($hash)
    {
        $users = $this->container->get('claroline.manager.user_manager')->getByEmailValidationHash($hash);
        $url = $this->router->generate('claro_security_validate_email', ['hash' => $hash], true);
        $body = $this->translator->trans('email_validation_url_display', ['%url%' => $url], 'platform');
        $subject = $this->translator->trans('email_validation', [], 'platform');

        $this->send($subject, $body, $users, null, [], true);
    }

    /**
     * @param User $user
     *
     * @return bool
     */
    public function sendCreationMessage(User $user)
    {
        $locale = $user->getLocale();
        $content = $this->contentManager->getTranslatedContent(['type' => 'claro_mail_registration']);
        $displayedLocale = isset($content[$locale]) ? $locale : $this->ch->getParameter('locale_language');
        $body = $content[$displayedLocale]['content'];
        $subject = $content[$displayedLocale]['title'];
        $url = $this->router->generate('claro_security_validate_email', ['hash' => $user->getEmailValidationHash()], true);
        $validationLink = $this->translator->trans('email_validation_url_display', ['%url%' => $url], 'platform');

        $body = str_replace('%first_name%', $user->getFirstName(), $body);
        $body = str_replace('%last_name%', $user->getLastName(), $body);
        $body = str_replace('%username%', $user->getUsername(), $body);
        $body = str_replace('%password%', $user->getPlainPassword(), $body);
        $body = str_replace('%validation_mail%', $validationLink, $body);
        $subject = str_replace('%platform_name%', $this->ch->getParameter('name'), $subject);

        return $this->send($subject, $body, [$user], null, [], true);
    }

    public function getMailInscription()
    {
        return $this->contentManager->getContent(['type' => 'claro_mail_registration']);
    }

    public function getMailLayout()
    {
        return $this->contentManager->getContent(['type' => 'claro_mail_layout']);
    }

    /**
     * @param string $subject
     * @param string $body
     * @param User[] $users
     * @param User   $from
     * @param array  $extra
     * @param bool   $force
     * @param string $replyToMail
     *
     * @return bool
     */
    public function send($subject, $body, array $users, $from = null, array $extra = [], $force = false, $replyToMail = null)
    {
        if (count($users) === 0) {
            //obviously, if we're not going to send anything to anyone, it's better to stop
            return false;
        }

        if ($this->isMailerAvailable()) {
            $to = [];

            $layout = $this->contentManager->getTranslatedContent(['type' => 'claro_mail_layout']);
            $fromEmail = $this->getMailerFrom();
            $locale = count($users) === 1 ? $users[0]->getLocale() : $this->ch->getParameter('locale_language');

            if (!$locale) {
                $locale = $this->ch->getParameter('locale_language');
            }

            $usedLayout = $layout[$locale]['content'];
            $body = str_replace('%content%', $body, $usedLayout);
            $body = str_replace('%platform_name%', $this->ch->getParameter('name'), $body);

            if ($from) {
                $body = str_replace('%first_name%', $from->getFirstName(), $body);
                $body = str_replace('%last_name%', $from->getLastName(), $body);
            } else {
                $body = str_replace('%first_name%', $this->ch->getParameter('name'), $body);
                $body = str_replace('%last_name%', '', $body);
            }

            foreach ($users as $user) {
                $mail = $user->getMail();

                if ($user->isMailValidated() || $force) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $to[] = $mail;
                    }
                }
            }

            if (isset($extra['to'])) {
                foreach ($extra['to'] as $mail) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $to[] = $mail;
                    }
                }
            }

            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($fromEmail)
                ->setReplyTo($replyToMail)
                ->setBody($body, 'text/html');

            if ($from !== null && filter_var($from->getMail(), FILTER_VALIDATE_EMAIL)) {
                $message->setReplyTo($from->getMail());
            }

            if (count($to) > 1) {
                $message->setBcc($to);
            } else {
                $message->setTo($to);
            }

            if (isset($extra['attachment'])) {
                $message->attach(\Swift_Attachment::fromPath($extra['attachment'], 'application/octet-stream'));
            }

            return $this->mailer->send($message) ? true : false;
        }

        return false;
    }

    /**
     * Validate a variable (placeholder) in a translated content.
     *
     * @param $translatedContents An array containing translated content
     * @param $mailVariable thevariable to validate
     *
     * @return array
     */
    public function validateMailVariable(array $translatedContents, $mailVariable)
    {
        $languages = array_keys($translatedContents);
        $errors = [];
        $voidCount = 0;

        foreach ($languages as $language) {
            if ($translatedContents[$language]['content'] !== '') {
                if (!strpos($translatedContents[$language]['content'], $mailVariable)) {
                    $errors[$language]['content'][] = 'missing_'.$mailVariable;
                }
            } else {
                ++$voidCount;
            }

            if ($voidCount === count($languages)) {
                $errors['no_content'] = 'need_at_least_one_translation';
            }
        }

        return $errors;
    }

    /**
     * @DI\Observe("refresh_cache")
     */
    public function refreshCache(RefreshCacheEvent $event)
    {
        try {
            $this->mailer->getTransport()->start();
            $event->addCacheParameter('is_mailer_available', true);
        } catch (\Swift_TransportException $e) {
            $event->addCacheParameter('is_mailer_available', false);
        }
    }

    public function getMailerFrom()
    {
        if ($from = $this->ch->getParameter('mailer_from')) {
            if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
                return $from;
            }
        }

        if ($this->ch->getParameter('domain_name') && trim($this->ch->getParameter('domain_name')) !== '') {
            return 'noreply@'.$this->ch->getParameter('domain_name');
        }

        return $this->ch->getParameter('support_email');
    }
}
