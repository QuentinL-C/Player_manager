<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LanguagePublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:LanguagePublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Language');
 
        $language = $repository->findOneBySlug($slug);

        if ($language === null) {
          throw $this->createNotFoundException('Langue : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:LanguagePublic:view.html.twig', array(
                                'language' => $language,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Language');
 
        $listLanguages = $repository->findAll();

        return $this->render('PMCharacterBundle:LanguagePublic:listLanguages.html.twig', array(
                                'listLanguages' => $listLanguages,
                            ));
    }
}
