<?php

namespace PM\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMWelcomeBundle:Homepage:index.html.twig');
    }
}
