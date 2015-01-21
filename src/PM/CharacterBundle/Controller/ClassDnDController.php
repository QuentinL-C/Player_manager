<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\ClassDnD;
use PM\CharacterBundle\Form\ClassDnDRegisterType;
use PM\CharacterBundle\Form\ClassDnDEditType;

class ClassDnDController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:ClassDnD:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $classDnD = new ClassDnD;
        $classDnD->setCreateUser($current_user);
        
        $form = $this->createForm(new ClassDnDRegisterType, $classDnD);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($classDnD);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la classe a bien été créée.' );
           
                    return $this->redirect($this->generateUrl('pm_classdnd_administration_view', array('slug' => $classDnD->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:classDnD:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:ClassDnD');
 
        $classDnD = $repository->findOneBySlug($slug);

        return $this->render('PMCharacterBundle:ClassDnD:view.html.twig', array(
                                'classDnD' => $classDnD,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:ClassDnD');
 
        $classDnD = $repository->findOneBySlug($slug);

        $form = $this->createForm(new ClassDnDEditType, $classDnD);
        
        $current_user = $this->getUser();
        $classDnD->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($classDnD);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre classe a bien été éditée.' );
           
                    return $this->redirect($this->generateUrl('pm_classdnd_administration_view', array('slug' => $classDnD->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:ClassDnD:edit.html.twig', array(
                                'classDnD' => $classDnD,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:ClassDnD');
 
        $listClassesDnD = $repository->findAll();

        return $this->render('PMCharacterBundle:ClassDnD:listClassesDnD.html.twig', array(
                                'listClassesDnD' => $listClassesDnD,
                            ));
    }
}
