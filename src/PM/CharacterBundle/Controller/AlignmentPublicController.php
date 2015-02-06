<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlignmentPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:AlignmentPublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Alignment');
 
        $alignment = $repository->findOneBySlug($slug);

        if ($alignment === null) {
          throw $this->createNotFoundException('Alignement : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMCharacterBundle:AlignmentPublic:view.html.twig', array(
                                'alignment' => $alignment,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Alignment');
 
        $listAlignments = $repository->findAll();

        return $this->render('PMCharacterBundle:AlignmentPublic:listAlignments.html.twig', array(
                                'listAlignments' => $listAlignments,
                            ));
    }
}
