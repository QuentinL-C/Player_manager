<?php

namespace PM\MonsterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\MonsterBundle\Entity\SpeedSpecial;
use PM\MonsterBundle\Form\SpeedSpecialRegisterType;
use PM\MonsterBundle\Form\SpeedSpecialEditType;

class SpeedSpecialController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMMonsterBundle:SpeedSpecial:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $speedspecial = new SpeedSpecial;
        $speedspecial->setCreateUser($current_user);
        
        $form = $this->createForm(new SpeedSpecialRegisterType, $speedspecial);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($speedspecial);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, le type de déplacement a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_speedspecial_administration_view', array('slug' => $speedspecial->getSlug())));
                }
            }
        return $this->render('PMMonsterBundle:SpeedSpecial:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:SpeedSpecial');
 
        $speedspecial = $repository->findOneBySlug($slug);

        if ($speedspecial === null) {
          throw $this->createNotFoundException('SpeedSpecial : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMMonsterBundle:SpeedSpecial:view.html.twig', array(
                                'speedspecial' => $speedspecial,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:SpeedSpecial');
 
        $speedspecial = $repository->findOneBySlug($slug);

        if ($speedspecial === null) {
          throw $this->createNotFoundException('SpeedSpecial : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new SpeedSpecialEditType, $speedspecial);
        
        $current_user = $this->getUser();
        $speedspecial->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($speedspecial);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre type de déplacement a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_speedspecial_administration_view', array('slug' => $speedspecial->getSlug())));
                }
            }
        
        return $this->render('PMMonsterBundle:SpeedSpecial:edit.html.twig', array(
                                'speedspecial' => $speedspecial,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:SpeedSpecial');
 
        $listSpeedSpecials = $repository->findAll();

        return $this->render('PMMonsterBundle:SpeedSpecial:listSpeedSpecials.html.twig', array(
                                'listSpeedSpecials' => $listSpeedSpecials,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMMonsterBundle:SpeedSpecial');
        $speedspecial = $repository->findOneBySlug($slug);
        
        if ($speedspecial === null) {
          throw $this->createNotFoundException('SpeedSpecial : [slug='.$slug.'] inexistant.');
        }
        
        $speedspecialAction = $this->container->get('pm_monster.speedspecialaction');
        $speedspecialAction->deleteSpeedSpecial($speedspecial);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre type de déplacement a bien été supprimé.' );
        return $this->forward('PMMonsterBundle:SpeedSpecial:list');
    }
}
