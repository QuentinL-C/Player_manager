<?php
// src/PM/WelcomeBundle/Connection/ConnectionListener.php

namespace PM\WelcomeBundle\Connection;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class ConnectionListener 
{
    protected $em;
    protected $security;
    protected $connectionRedirect;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context, ConnectionRedirect $connectionRedirect)
    {
        $this->connectionRedirect = $connectionRedirect;
        $this->em = $EntityManager;
        $this->security = $security_context;
    }

    public function onKernelRequest(FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
          return;
        }
        
        if ($this->security->getToken() && $this->security->getToken()->getUser() !== 'anon.')
        {
            $current_user = $this->security->getToken()->getUser();
            if(NULL !== $current_user) {
                return;
            }
        }
        
        if($event->getRequest()->get('_route') == "fos_user_security_login") {
            return;
        }

        if(!preg_match("#^/js/.#", $event->getRequest()->getPathInfo()) OR !preg_match("#^/_wdt/.#", $event->getRequest()->getPathInfo())) {
            return;
        }
            
        $response = $this->connectionRedirect->redirect();
        $event->setResponse($response);
    }
}