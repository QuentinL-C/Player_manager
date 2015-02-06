<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RacePublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:RacePublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
 
        $race = $repository->findOneBySlug($slug);
        
        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }

        return $this->render('PMCharacterBundle:RacePublic:view.html.twig', array(
                                'race' => $race,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
 
        $listRaces = $repository->findAll();

        return $this->render('PMCharacterBundle:RacePublic:listRaces.html.twig', array(
                                'listRaces' => $listRaces,
                            ));
    }
}
