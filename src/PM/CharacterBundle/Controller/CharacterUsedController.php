<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\CharacterUsed;
use PM\CharacterBundle\Entity\CharacterWealth;
use PM\CharacterBundle\Entity\CharacterSkill;
use PM\CharacterBundle\Entity\Ability;
use PM\CharacterBundle\Form\CharacterUsedRegisterType;
use PM\CharacterBundle\Form\CharacterUsedEditType;
use PM\CharacterBundle\Form\CharacterUsedAddSkillType;

class CharacterUsedController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:CharacterUsed:index.html.twig');
    }
    
    public function registerAction()
    {   
        $em = $this->getDoctrine()
                        ->getManager();
        $current_user = $this->getUser();
        
        // -- Gestion de la richesse du personnage :
        $characterWealth = new CharacterWealth;
        $characterWealth->setCreateUser($current_user); $characterWealth->setPo(0); $characterWealth->setPa(0); $characterWealth->setPc(0);
        
        // -- Création du personnage :
        $characterUsed = new CharacterUsed;
        $characterUsed->setCreateUser($current_user);
        $characterUsed->setHpCurrent(0); $characterUsed->setHpMax(0); $characterUsed->setWealth($characterWealth);
        
        // -- Gestion des Caractéristiques du personnage :
        $strength = new Ability;        $strength->setCreateUser($current_user);    $strength->setType(1);      $strength->setValue(0);     $strength->setCharacterUsed($characterUsed);
        $dexterity = new Ability;       $dexterity->setCreateUser($current_user);   $dexterity->setType(2);     $dexterity->setValue(0);    $dexterity->setCharacterUsed($characterUsed);
        $constitution = new Ability;    $constitution->setCreateUser($current_user); $constitution->setType(3); $constitution->setValue(0); $constitution->setCharacterUsed($characterUsed);
        $intelligence = new Ability;    $intelligence->setCreateUser($current_user); $intelligence->setType(4); $intelligence->setValue(0); $intelligence->setCharacterUsed($characterUsed);
        $wisdom = new Ability;          $wisdom->setCreateUser($current_user);      $wisdom->setType(5);        $wisdom->setValue(0);       $wisdom->setCharacterUsed($characterUsed);
        $charisma = new Ability;        $charisma->setCreateUser($current_user);    $charisma->setType(6);      $charisma->setValue(0);     $charisma->setCharacterUsed($characterUsed);
        
        // -- Création du formulaire :
        $form = $this->createForm(new CharacterUsedRegisterType, $characterUsed);
 
        // -- Validation du formulaire :
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    // -- Gestion de la race
                    $classDnDInstances = $characterUsed->getClassDnDInstances();
                    foreach ($classDnDInstances as $classDnDInstance) {
                        $classDnDInstance->setCreateUser($current_user);
                        $characterUsed->addClassDnDInstance($classDnDInstance);
                        $em->persist($classDnDInstance);
                    }
                    // -- On crée un CharacterSkill pour chaque Skill
                    $repositorySkill = $em->getRepository('PMCharacterBundle:Skill');
                    $skills = $repositorySkill->findAll();
                    foreach ($skills as $skill) {
                        $characterSkill = new CharacterSkill;
                        $characterSkill->setCreateUser($current_user);
                        $characterSkill->setCharacterUsed($characterUsed);
                        $characterSkill->setSkill($skill);
                        $characterSkill->setRanks(0);
                        $em->persist($characterSkill);
                    }
                    // -- Autres paramètres :
                    $em->persist($characterUsed);
                    $em->persist($characterWealth);
                    $em->persist($strength); $em->persist($dexterity); $em->persist($constitution); $em->persist($intelligence); $em->persist($wisdom); $em->persist($charisma);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre personnage a bien été créé.' );
                    //Renvoie vers la page de gestion des Caractéristiques :
                    return $this->redirect($this->generateUrl('pm_characterused_administration_insert_abilities', array('slug' => $characterUsed->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:CharacterUsed:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function registerAbilitiesAction($slug, Request $request)
    {
        // -- Récupération du personnage et de ses caractéristiques :
        $manager = $this->getDoctrine()
                           ->getManager();
        $repositoryCharacterUsed = $manager->getRepository('PMCharacterBundle:CharacterUsed');
        $repositoryAbility = $manager->getRepository('PMCharacterBundle:Ability');
 
        $characterUsed = $repositoryCharacterUsed->findOneBySlug($slug);
        $abilities = $repositoryAbility->findBy(array('characterUsed' => $characterUsed),
                                                array('type' => 'ASC'),
                                                6,
                                                0);

        // -- Génération du formulaire
        $defaultData = array('strength' => $abilities[0]->getValue(),
                             'dexterity' => $abilities[1]->getValue(),
                             'constitution' => $abilities[2]->getValue(),
                             'intelligence' => $abilities[3]->getValue(),
                             'wisdom' => $abilities[4]->getValue(),
                             'charisma' => $abilities[5]->getValue(),);
        $form = $this->createFormBuilder($defaultData)
            ->add('strength',       'integer',  array('required' => true))
            ->add('dexterity',      'integer',  array('required' => true))
            ->add('constitution',   'integer',  array('required' => true))
            ->add('intelligence',   'integer',  array('required' => true))
            ->add('wisdom',         'integer',  array('required' => true))
            ->add('charisma',       'integer',  array('required' => true))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $abilities[0]->setValue($data['strength']); $em->persist($abilities[0]);
            $abilities[1]->setValue($data['dexterity']); $em->persist($abilities[1]);
            $abilities[2]->setValue($data['constitution']); $em->persist($abilities[2]);
            $abilities[3]->setValue($data['intelligence']); $em->persist($abilities[3]);
            $abilities[4]->setValue($data['wisdom']); $em->persist($abilities[4]);
            $abilities[5]->setValue($data['charisma']); $em->persist($abilities[5]);
            $em->flush();
                    
            $this->get('session')->getFlashBag()->add('notice', 'Félicitations, les caractéristiques de votre personnage ont bien été mmises à jour.' );
            //Renvoie vers la page de gestion des Caractéristiques :
            return $this->redirect($this->generateUrl('pm_characterused_administration_insert_skills', array('slug' => $characterUsed->getSlug())));
        }
        
        return $this->render('PMCharacterBundle:CharacterUsed:register_abilities.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'form' => $form->createView(),
                            ));
    }
    
    public function registerSkillsAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $current_user = $this->getUser();
        // -- Récupération du personnage et des compétences :
        $repositoryCharacterUsed = $em->getRepository('PMCharacterBundle:CharacterUsed');
        $characterUsed = $repositoryCharacterUsed->findOneBySlug($slug);
        
        // -- Création du formulaire :
        $form = $this->createForm(new CharacterUsedAddSkillType, $characterUsed);
        
        // -- Validation du formulaire :
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    // -- Gestion de la race
                    $skills = $characterUsed->getSkills();
                    foreach ($skills as $skill) {
                        $skill->setUpdateUser($current_user);
                        $em->persist($skill);
                    }
                    $em->persist($characterUsed);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre personnage a bien été édité.' );
                    //Renvoie vers la page de gestion des Caractéristiques :
                    return $this->redirect($this->generateUrl('pm_characterused_administration_view', array('slug' => $characterUsed->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:CharacterUsed:register_skills.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $manager = $this->getDoctrine()->getManager();
        $repositoryCharacterUsed = $manager->getRepository('PMCharacterBundle:CharacterUsed');
        $repositoryAbility = $manager->getRepository('PMCharacterBundle:Ability');
 
        $characterUsed = $repositoryCharacterUsed->findOneBySlug($slug);
        
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage : [slug='.$slug.'] inexistant.');
        }
        
        $serviceCharacterUsed = $this->container->get('pm_character.characterused');
        //Ability :
        $strength = $serviceCharacterUsed->getStrength($characterUsed);
        $strengthModifier = $serviceCharacterUsed->getStrengthModifier($characterUsed);
        $dexterity = $serviceCharacterUsed->getDexterity($characterUsed);
        $dexterityModifier = $serviceCharacterUsed->getDexterityModifier($characterUsed);
        $constitution = $serviceCharacterUsed->getConstitution($characterUsed);
        $constitutionModifier = $serviceCharacterUsed->getConstitutionModifier($characterUsed);
        $intelligence = $serviceCharacterUsed->getIntelligence($characterUsed);
        $intelligenceModifier = $serviceCharacterUsed->getIntelligenceModifier($characterUsed);
        $wisdom = $serviceCharacterUsed->getWisdom($characterUsed);
        $wisdomModifier = $serviceCharacterUsed->getWisdomModifier($characterUsed);
        $charisma = $serviceCharacterUsed->getCharisma($characterUsed);
        $charismaModifier = $serviceCharacterUsed->getCharismaModifier($characterUsed);
        $babs = $serviceCharacterUsed->getBAB($characterUsed);
        $grappleModifiers = $serviceCharacterUsed->getGrappleModifier($characterUsed);
        $ac = $serviceCharacterUsed->getAC($characterUsed);
        $touchAC = $serviceCharacterUsed->getTouchAC($characterUsed);
        $fFAC = $serviceCharacterUsed->getFFAC($characterUsed);
        $fortitude = $serviceCharacterUsed->getFortitude($characterUsed);
        $reflex = $serviceCharacterUsed->getRefLex($characterUsed);
        $will = $serviceCharacterUsed->getWill($characterUsed);
        $speed = $serviceCharacterUsed->getSpeed($characterUsed);
        $initiative = $serviceCharacterUsed->getInitiativeModifier($characterUsed);

        return $this->render('PMCharacterBundle:CharacterUsed:view.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'strength' => $strength, 'strengthModifier' => $strengthModifier,
                                'dexterity' => $dexterity, 'dexterityModifier' => $dexterityModifier,
                                'constitution' => $constitution, 'constitutionModifier' => $constitutionModifier,
                                'intelligence' => $intelligence, 'intelligenceModifier' => $intelligenceModifier,
                                'wisdom' => $wisdom, 'wisdomModifier' => $wisdomModifier,
                                'charisma' => $charisma, 'charismaModifier' => $charismaModifier,
                                'babs' => $babs,
                                'grappleModifiers' => $grappleModifiers,
                                'ac' => $ac,
                                'touchAC' => $touchAC,
                                'fFAC' => $fFAC,
                                'fortitude' => $fortitude,
                                'reflex' => $reflex,
                                'will' => $will,
                                'speed' => $speed,
                                'initiative' => $initiative
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $characterUsed = $repository->findOneBySlug($slug);

        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new CharacterUsedEditType, $characterUsed);
        
        $current_user = $this->getUser();
        $characterUsed->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($characterUsed);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre personnage a bien été édité.' );
           
                    return $this->redirect($this->generateUrl('pm_characterused_administration_view', array('slug' => $characterUsed->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:CharacterUsed:edit.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $listCharactersUsed = $repository->findAll();

        return $this->render('PMCharacterBundle:CharacterUsed:listCharactersUsed.html.twig', array(
                                'listCharactersUsed' => $listCharactersUsed,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
        $characterUsed = $repository->findOneBySlug($slug);
        
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage : [slug='.$slug.'] inexistant.');
        }
        
        $serviceCharacterUsed = $this->container->get('pm_character.characterused');
        $serviceCharacterUsed->deleteCharacterUsed($characterUsed);
             
        $this->get('session')->getFlashBag()->add('notice', 'Le personnage a bien été supprimé.' );
        return $this->forward('PMCharacterBundle:CharacterUsed:list');
    }
}
