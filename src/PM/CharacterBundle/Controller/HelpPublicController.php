<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelpPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:HelpPublic:index.html.twig');
    }
}
