<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassDnDPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:ClassDnDPublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $manager = $this->getDoctrine()->getManager();
        $repositoryClassDnD = $manager->getRepository('PMCharacterBundle:ClassDnD');
        $repositoryClassBAB = $manager->getRepository('PMCharacterBundle:ClassBAB');
        $repositoryClassST = $manager->getRepository('PMCharacterBundle:ClassST');
 
        $classDnD = $repositoryClassDnD->findOneBySlug($slug);
        
        if ($classDnD === null) {
          throw $this->createNotFoundException('Classe : [slug='.$slug.'] inexistante.');
        }
        
        $babs = $repositoryClassBAB->findBy(array('classDnD' => $classDnD),
                                            array('lvl' => 'asc', 'attackNb' => 'asc'));
        $sts = $repositoryClassST->findBy(array('classDnD' => $classDnD),
                                            array('lvl' => 'asc'));

        return $this->render('PMCharacterBundle:ClassDnDPublic:view.html.twig', array(
                                'classDnD' => $classDnD,
                                'babs' => $babs,
                                'sts' => $sts,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:ClassDnD');
 
        $listClassesDnD = $repository->findAll();

        return $this->render('PMCharacterBundle:ClassDnDPublic:listClassesDnD.html.twig', array(
                                'listClassesDnD' => $listClassesDnD,
                            ));
    }
}
