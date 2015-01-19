<?php
// src/PM/WelcomeBundle/Connection/ConnectionRedirect.php

namespace PM\WelcomeBundle\Connection;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ConnectionRedirect
{
    protected $router;
    
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }
    
    public function redirect()
    {
        $response = new RedirectResponse($this->router->generate('fos_user_security_login'));
        return $response;
    }
}