<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\ClassDnD;
use PM\CharacterBundle\Form\ClassDnDRegisterType;
use PM\CharacterBundle\Form\ClassDnDEditType;
use PM\CharacterBundle\Form\ClassBABType;
use PM\CharacterBundle\Form\ClassSTType;

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
        $manager = $this->getDoctrine()
                           ->getManager();
        $repositoryClassDnD = $manager->getRepository('PMCharacterBundle:ClassDnD');
        $repositoryClassBAB = $manager->getRepository('PMCharacterBundle:ClassBAB');
        $repositoryClassST = $manager->getRepository('PMCharacterBundle:ClassST');
 
        $classDnD = $repositoryClassDnD->findOneBySlug($slug);
        $babs = $repositoryClassBAB->findBy(array('classDnD' => $classDnD),
                                            array('lvl' => 'asc', 'attackNb' => 'asc'));
        $sts = $repositoryClassST->findBy(array('classDnD' => $classDnD),
                                            array('lvl' => 'asc'));

        return $this->render('PMCharacterBundle:ClassDnD:view.html.twig', array(
                                'classDnD' => $classDnD,
                                'babs' => $babs,
                                'sts' => $sts,
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
    
    public function editBABAction($slug, Request $request)
    {
        $current_user = $this->getUser();
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:ClassDnD');
 
        $classDnD = $repository->findOneBySlug($slug);
        $classDnD->setUpdateUser($current_user);
        $classDnD->setUpdateComment('Edition des BABs de la classe');
 
        // -- Génération du formulaire
        $form = $this->createFormBuilder()
            ->add('babs', 'collection', array('type' => new ClassBABType(),
                                              'allow_add'    => true,
                                              'allow_delete' => true))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            foreach ($data['babs'] as $bab) {
                $bab->setCreateUser($current_user);
                $em->persist($bab);
            }
            $em->persist($classDnD);
            $em->flush();
                    
            $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la classe a bien été mise à jour.' );
            //Renvoie vers la page de gestion des Caractéristiques :
            return $this->redirect($this->generateUrl('pm_classdnd_administration_view', array('slug' => $classDnD->getSlug())));
        }
        
        return $this->render('PMCharacterBundle:classDnD:editBAB.html.twig', array(
                                'classDnD' => $classDnD,
                                'form' => $form->createView(),
                            ));
    }
    
    public function editSTAction($slug, Request $request)
    {
        $current_user = $this->getUser();
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:ClassDnD');
 
        $classDnD = $repository->findOneBySlug($slug);
        $classDnD->setUpdateUser($current_user);
        $classDnD->setUpdateComment('Edition des STs de la classe');
 
        // -- Génération du formulaire
        $form = $this->createFormBuilder()
            ->add('sts', 'collection',  array('type' => new ClassSTType(),
                                              'allow_add'    => true,
                                              'allow_delete' => true))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            foreach ($data['sts'] as $st) {
                $st->setCreateUser($current_user);
                $em->persist($st);
            }
            $em->persist($classDnD);
            $em->flush();
                    
            $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la classe a bien été mise à jour.' );
            //Renvoie vers la page de gestion des Caractéristiques :
            return $this->redirect($this->generateUrl('pm_classdnd_administration_view', array('slug' => $classDnD->getSlug())));
        }
        
        return $this->render('PMCharacterBundle:classDnD:editST.html.twig', array(
                                'classDnD' => $classDnD,
                                'form' => $form->createView(),
                            ));
    }
}
