<?php

namespace PM\WeaponBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\WeaponBundle\Entity\WeaponType;
use PM\WeaponBundle\Form\WeaponTypeRegisterType;
use PM\WeaponBundle\Form\WeaponTypeEditType;

class WeaponTypeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMWeaponBundle:WeaponType:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $weapontype = new WeaponType;
        $weapontype->setCreateUser($current_user);
        
        $form = $this->createForm(new WeaponTypeRegisterType, $weapontype);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($weapontype);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, le type d\'arme a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_weapontype_administration_view', array('slug' => $weapontype->getSlug())));
                }
            }
        return $this->render('PMWeaponBundle:WeaponType:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMWeaponBundle:WeaponType');
 
        $weapontype = $repository->findOneBySlug($slug);

        if ($weapontype === null) {
          throw $this->createNotFoundException('WeaponType : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMWeaponBundle:WeaponType:view.html.twig', array(
                                'weapontype' => $weapontype,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMWeaponBundle:WeaponType');
 
        $weapontype = $repository->findOneBySlug($slug);

        if ($weapontype === null) {
          throw $this->createNotFoundException('WeaponType : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new WeaponTypeEditType, $weapontype);
        
        $current_user = $this->getUser();
        $weapontype->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($weapontype);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre type d\'arme a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_weapontype_administration_view', array('slug' => $weapontype->getSlug())));
                }
            }
        
        return $this->render('PMWeaponBundle:WeaponType:edit.html.twig', array(
                                'weapontype' => $weapontype,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMWeaponBundle:WeaponType');
 
        $listWeaponTypes = $repository->findAll();

        return $this->render('PMWeaponBundle:WeaponType:listWeaponTypes.html.twig', array(
                                'listWeaponTypes' => $listWeaponTypes,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMWeaponBundle:WeaponType');
        $weapontype = $repository->findOneBySlug($slug);
        
        if ($weapontype === null) {
          throw $this->createNotFoundException('WeaponType : [slug='.$slug.'] inexistant.');
        }
        
        $weapontypeAction = $this->container->get('pm_weapon.weapontypeaction');
        $weapontypeAction->deleteWeaponType($weapontype);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre type d\'arme a bien été supprimé.' );
        return $this->forward('PMWeaponBundle:WeaponType:list');
    }
}
