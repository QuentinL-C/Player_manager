<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Size;
use PM\CharacterBundle\Form\SizeRegisterType;
use PM\CharacterBundle\Form\SizeEditType;

class SizeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Size:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $size = new Size;
        $size->setCreateUser($current_user);
        
        $form = $this->createForm(new SizeRegisterType, $size);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($size);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre taille a bien été créée.' );
                    return $this->redirect($this->generateUrl('pm_size_administration_view', array('slug' => $size->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:size:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Size');
 
        $size = $repository->findOneBySlug($slug);
        
        if ($size === null) {
          throw $this->createNotFoundException('Taille : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:Size:view.html.twig', array(
                                'size' => $size,
                            ));
    }
    
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Size');
 
        $size = $repository->findOneBySlug($slug);
        
        if ($size === null) {
          throw $this->createNotFoundException('Taille : [slug='.$slug.'] inexistante.');
        }
        
        $form = $this->createForm(new SizeEditType, $size);
        
        $current_user = $this->getUser();
        $size->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($size);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre taille a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_size_administration_view', array('slug' => $size->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Size:edit.html.twig', array(
                                'size' => $size,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Size');
 
        $listSizes = $repository->findAll();

        return $this->render('PMCharacterBundle:Size:listSizes.html.twig', array(
                                'listSizes' => $listSizes,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Size');
        $size = $repository->findOneBySlug($slug);
        
        if ($size === null) {
          throw $this->createNotFoundException('Taille : [slug='.$slug.'] inexistante.');
        }
        
        $deleteSize = $this->container->get('pm_character.deletesize');
        $deleteSize->deleteSize($size);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre taille a bien été supprimée.' );
        return $this->forward('PMCharacterBundle:Size:list');
    }
}
