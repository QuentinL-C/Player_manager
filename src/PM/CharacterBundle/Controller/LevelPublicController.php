<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LevelPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:LevelPublic:index.html.twig');
    }
    
    public function viewAction($level)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Level');
 
        $levelObject = $repository->findOneByLevel($level);
        
        if ($levelObject === null) {
          throw $this->createNotFoundException('Niveau : [slug='.$level.'] inexistant.');
        }
        
        return $this->render('PMCharacterBundle:LevelPublic:view.html.twig', array(
                                'level' => $levelObject,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Level');
 
        $listLevels = $repository->findAll();

        return $this->render('PMCharacterBundle:LevelPublic:listLevels.html.twig', array(
                                'listLevels' => $listLevels,
                            ));
    }
}
