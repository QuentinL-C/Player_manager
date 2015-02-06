<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbilityPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:AbilityPublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Ability');
 
        $ability = $repository->findOneBySlug($slug);
        
        if ($ability === null) {
          throw $this->createNotFoundException('Caractéristique : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:AbilityPublic:view.html.twig', array(
                                'ability' => $ability,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Ability');
 
        $listAbilities = $repository->findAll();

        return $this->render('PMCharacterBundle:AbilityPublic:listAbilities.html.twig', array(
                                'listAbilities' => $listAbilities,
                            ));
    }
}
