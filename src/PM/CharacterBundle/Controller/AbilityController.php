<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Ability;
use PM\CharacterBundle\Form\AbilityRegisterType;
use PM\CharacterBundle\Form\AbilityEditType;

class AbilityController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Ability:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $ability = new Ability;
        $ability->setCreateUser($current_user);
        
        $form = $this->createForm(new AbilityRegisterType, $ability);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($ability);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre caractéristique a bien été créée.' );
                    return $this->redirect($this->generateUrl('pm_ability_administration_view', array('slug' => $ability->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:ability:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Ability');
 
        $ability = $repository->findOneBySlug($slug);
        
        if ($ability === null) {
          throw $this->createNotFoundException('Caractéristique : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:Ability:view.html.twig', array(
                                'ability' => $ability,
                            ));
    }
    
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Ability');
 
        $ability = $repository->findOneBySlug($slug);
        
        if ($ability === null) {
          throw $this->createNotFoundException('Caractéristique : [slug='.$slug.'] inexistante.');
        }
        
        $form = $this->createForm(new AbilityEditType, $ability);
        
        $current_user = $this->getUser();
        $ability->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($ability);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre caractéristique a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_ability_administration_view', array('slug' => $ability->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Ability:edit.html.twig', array(
                                'ability' => $ability,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Ability');
 
        $listAbilities = $repository->findAll();

        return $this->render('PMCharacterBundle:Ability:listAbilities.html.twig', array(
                                'listAbilities' => $listAbilities,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Ability');
        $ability = $repository->findOneBySlug($slug);
        
        if ($ability === null) {
          throw $this->createNotFoundException('Caractéristique : [slug='.$slug.'] inexistante.');
        }
        
        $deleteAbility = $this->container->get('pm_character.deleteability');
        $deleteAbility->deleteAbility($ability);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre caractéristique a bien été supprimée.' );
        return $this->forward('PMCharacterBundle:Ability:list');
    }
}
