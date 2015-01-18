<?php

namespace PM\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMWelcomeBundle:Administration:index.html.twig');
    }
}
