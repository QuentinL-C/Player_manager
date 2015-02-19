<?php

namespace PM\GiftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\GiftBundle\Entity\Gift;
use PM\GiftBundle\Form\GiftRegisterType;
use PM\GiftBundle\Form\GiftEditType;

class GiftController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMGiftBundle:Gift:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $gift = new Gift;
        $gift->setCreateUser($current_user);
        
        $form = $this->createForm(new GiftRegisterType, $gift);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($gift);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, le don a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_gift_administration_view', array('slug' => $gift->getSlug())));
                }
            }
        return $this->render('PMGiftBundle:Gift:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGiftBundle:Gift');
 
        $gift = $repository->findOneBySlug($slug);

        if ($gift === null) {
          throw $this->createNotFoundException('Gift : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMGiftBundle:Gift:view.html.twig', array(
                                'gift' => $gift,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGiftBundle:Gift');
 
        $gift = $repository->findOneBySlug($slug);

        if ($gift === null) {
          throw $this->createNotFoundException('Gift : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new GiftEditType, $gift);
        
        $current_user = $this->getUser();
        $gift->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($gift);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre don a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_gift_administration_view', array('slug' => $gift->getSlug())));
                }
            }
        
        return $this->render('PMGiftBundle:Gift:edit.html.twig', array(
                                'gift' => $gift,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGiftBundle:Gift');
 
        $listGifts = $repository->findAll();

        return $this->render('PMGiftBundle:Gift:listGifts.html.twig', array(
                                'listGifts' => $listGifts,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMGiftBundle:Gift');
        $gift = $repository->findOneBySlug($slug);
        
        if ($gift === null) {
          throw $this->createNotFoundException('Gift : [slug='.$slug.'] inexistant.');
        }
        
        $giftAction = $this->container->get('pm_gift.giftaction');
        $giftAction->deleteGift($gift);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre don a bien été supprimé.' );
        return $this->forward('PMGiftBundle:Gift:list');
    }
}
