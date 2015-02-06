<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SizePublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:SizePublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Size');
 
        $size = $repository->findOneBySlug($slug);
        
        if ($size === null) {
          throw $this->createNotFoundException('Taille : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:SizePublic:view.html.twig', array(
                                'size' => $size,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Size');
 
        $listSizes = $repository->findAll();

        return $this->render('PMCharacterBundle:SizePublic:listSizes.html.twig', array(
                                'listSizes' => $listSizes,
                            ));
    }
}
