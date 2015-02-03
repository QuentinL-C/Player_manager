<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Race;
use PM\CharacterBundle\Entity\RaceAbility;
use PM\CharacterBundle\Form\RaceRegisterType;
use PM\CharacterBundle\Form\RaceEditType;

class RaceController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Race:index.html.twig');
    }
    
    public function registerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $current_user = $this->getUser();
        $race = new Race;
        $race->setCreateUser($current_user);
        
        // -- Gestion des Modificateurs de Caractéristiques de la Race :
        $strength = new RaceAbility;        $strength->setCreateUser($current_user);    $strength->setType(1);      $strength->setValue(0);     $strength->setRace($race);
        $dexterity = new RaceAbility;       $dexterity->setCreateUser($current_user);   $dexterity->setType(2);     $dexterity->setValue(0);    $dexterity->setRace($race);
        $constitution = new RaceAbility;    $constitution->setCreateUser($current_user); $constitution->setType(3); $constitution->setValue(0); $constitution->setRace($race);
        $intelligence = new RaceAbility;    $intelligence->setCreateUser($current_user); $intelligence->setType(4); $intelligence->setValue(0); $intelligence->setRace($race);
        $wisdom = new RaceAbility;          $wisdom->setCreateUser($current_user);      $wisdom->setType(5);        $wisdom->setValue(0);       $wisdom->setRace($race);
        $charisma = new RaceAbility;        $charisma->setCreateUser($current_user);    $charisma->setType(6);      $charisma->setValue(0);     $charisma->setRace($race);
        
        // -- Génération du formulaire :
        $form = $this->createForm(new RaceRegisterType, $race);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($race);
                    $strength->setValue($form->get('strength')->getData()); $em->persist($strength);
                    $dexterity->setValue($form->get('dexterity')->getData()); $em->persist($dexterity);
                    $constitution->setValue($form->get('constitution')->getData()); $em->persist($constitution);
                    $intelligence->setValue($form->get('intelligence')->getData()); $em->persist($intelligence);
                    $wisdom->setValue($form->get('wisdom')->getData()); $em->persist($wisdom);
                    $charisma->setValue($form->get('charisma')->getData()); $em->persist($charisma);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la race a bien été créée.' );
                    return $this->redirect($this->generateUrl('pm_race_administration_view', array('slug' => $race->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:race:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
 
        $race = $repository->findOneBySlug($slug);
        
        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }

        return $this->render('PMCharacterBundle:Race:view.html.twig', array(
                                'race' => $race,
                            ));
    }
    
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Race');
 
        $race = $repository->findOneBySlug($slug);

        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }
        
        $form = $this->createForm(new RaceEditType, $race);
        
        $current_user = $this->getUser();
        $race->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($race);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre race a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_race_administration_view', array('slug' => $race->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Race:edit.html.twig', array(
                                'race' => $race,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
 
        $listRaces = $repository->findAll();

        return $this->render('PMCharacterBundle:Race:listRaces.html.twig', array(
                                'listRaces' => $listRaces,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
        $race = $repository->findOneBySlug($slug);
        
        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }
        
        $deleteRace = $this->container->get('pm_character.deleterace');
        $deleteRace->deleteRace($race);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre race a bien été supprimée.' );
        return $this->forward('PMCharacterBundle:Race:list');
    }
}
