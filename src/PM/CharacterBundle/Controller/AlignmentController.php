<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Alignment;
use PM\CharacterBundle\Form\AlignmentRegisterType;
use PM\CharacterBundle\Form\AlignmentEditType;

class AlignmentController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Alignment:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $alignment = new Alignment;
        $alignment->setCreateUser($current_user);
        
        $form = $this->createForm(new AlignmentRegisterType, $alignment);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($alignment);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, l\'Alignement a bien été créé.' );
           
                    return $this->redirect($this->generateUrl('pm_alignment_view', array('slug' => $alignment->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:Alignment:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Alignment');
 
        $alignment = $repository->findOneBySlug($slug);

        return $this->render('PMCharacterBundle:Alignment:view.html.twig', array(
                                'alignment' => $alignment,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Alignment');
 
        $alignment = $repository->findOneBySlug($slug);

        $form = $this->createForm(new AlignmentEditType, $alignment);
        
        $current_user = $this->getUser();
        $alignment->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($alignment);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre alignement a bien été édité.' );
           
                    return $this->redirect($this->generateUrl('pm_alignment_view', array('slug' => $alignment->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Alignment:edit.html.twig', array(
                                'alignment' => $alignment,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Alignment');
 
        $listAlignments = $repository->findAll();

        return $this->render('PMCharacterBundle:Alignment:listAlignments.html.twig', array(
                                'listAlignments' => $listAlignments,
                            ));
    }
}
