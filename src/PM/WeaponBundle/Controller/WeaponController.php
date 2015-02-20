<?php

namespace PM\WeaponBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\WeaponBundle\Entity\Weapon;
use PM\WeaponBundle\Form\WeaponRegisterType;
use PM\WeaponBundle\Form\WeaponEditType;

class WeaponController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMWeaponBundle:Weapon:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $weapon = new Weapon;
        $weapon->setCreateUser($current_user);
        
        $form = $this->createForm(new WeaponRegisterType, $weapon);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($weapon);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, l\'arme a bien été créée.' );
                    return $this->redirect($this->generateUrl('pm_weapon_administration_view', array('slug' => $weapon->getSlug())));
                }
            }
        return $this->render('PMWeaponBundle:Weapon:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMWeaponBundle:Weapon');
 
        $weapon = $repository->findOneBySlug($slug);

        if ($weapon === null) {
          throw $this->createNotFoundException('Weapon : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMWeaponBundle:Weapon:view.html.twig', array(
                                'weapon' => $weapon,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMWeaponBundle:Weapon');
 
        $weapon = $repository->findOneBySlug($slug);

        if ($weapon === null) {
          throw $this->createNotFoundException('Weapon : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new WeaponEditType, $weapon);
        
        $current_user = $this->getUser();
        $weapon->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($weapon);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre arme a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_weapon_administration_view', array('slug' => $weapon->getSlug())));
                }
            }
        
        return $this->render('PMWeaponBundle:Weapon:edit.html.twig', array(
                                'weapon' => $weapon,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMWeaponBundle:Weapon');
 
        $listWeapons = $repository->findAll();

        return $this->render('PMWeaponBundle:Weapon:listWeapons.html.twig', array(
                                'listWeapons' => $listWeapons,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMWeaponBundle:Weapon');
        $weapon = $repository->findOneBySlug($slug);
        
        if ($weapon === null) {
          throw $this->createNotFoundException('Weapon : [slug='.$slug.'] inexistant.');
        }
        
        $weaponAction = $this->container->get('pm_weapon.weaponaction');
        $weaponAction->deleteWeapon($weapon);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre arme a bien été supprimée.' );
        return $this->forward('PMWeaponBundle:Weapon:list');
    }
}
