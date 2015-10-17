<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CharacterUsedPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:CharacterUsedPublic:index.html.twig');
    }
    
    public function listAction()
    {
        $current_user = $this->getUser();
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $listCharactersUsed = $repository->findByUser($current_user);

        return $this->render('PMCharacterBundle:CharacterUsedPublic:listCharactersUsed.html.twig', array(
                                'listCharactersUsed' => $listCharactersUsed,
                            ));
    }
    
    public function listContentAction()
    {
        $current_user = $this->getUser();
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $listCharactersUsed = $repository->findByUser($current_user);

        return $this->render('PMCharacterBundle:CharacterUsedPublic:listCharactersUsed_content.html.twig', array(
                                'listCharactersUsed' => $listCharactersUsed,
                            ));
    }
    
    public function viewAction($slug)
    {
        $current_user = $this->getUser();
        $manager = $this->getDoctrine()->getManager();
        $repositoryCharacterUsed = $manager->getRepository('PMCharacterBundle:CharacterUsed');
 
        $characterUsed = $repositoryCharacterUsed->findOneBy(array('slug' => $slug, 'user' => $current_user));
        
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage : [slug='.$slug.'] inexistant.');
        }
        
        $serviceCharacterUsedDnD = $this->container->get('pm_character.characteruseddnd');
        $serviceCharacterUsedAbility = $this->container->get('pm_character.characterusedability');
        $serviceCharacterUsedST = $this->container->get('pm_character.characterusedst');
        //Ability :
        $abilities = $serviceCharacterUsedAbility->getAbilities($characterUsed);
        $babs = $serviceCharacterUsedDnD->getBAB($characterUsed);
        $grappleModifiers = $serviceCharacterUsedDnD->getGrappleModifier($characterUsed);
        $ac = $serviceCharacterUsedDnD->getAC($characterUsed);
        $touchAC = $serviceCharacterUsedDnD->getTouchAC($characterUsed);
        $fFAC = $serviceCharacterUsedDnD->getFFAC($characterUsed);
        $fortitude = $serviceCharacterUsedST->getFortitude($characterUsed);
        $reflex = $serviceCharacterUsedST->getRefLex($characterUsed);
        $will = $serviceCharacterUsedST->getWill($characterUsed);
        $speed = $serviceCharacterUsedDnD->getSpeed($characterUsed);
        $initiative = $serviceCharacterUsedDnD->getInitiativeModifier($characterUsed);
        $xpForLevelUp = $serviceCharacterUsedDnD->getXpPointsForLevelUp($characterUsed);

        return $this->render('PMCharacterBundle:CharacterUsedPublic:view.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'abilities' => $abilities,
                                'babs' => $babs,
                                'grappleModifiers' => $grappleModifiers,
                                'ac' => $ac,
                                'touchAC' => $touchAC,
                                'fFAC' => $fFAC,
                                'fortitude' => $fortitude,
                                'reflex' => $reflex,
                                'will' => $will,
                                'speed' => $speed,
                                'initiative' => $initiative,
                                'xpForLevelUp' => $xpForLevelUp
                            ));
    }
    
    public function viewContentAction($slug)
    {
        $current_user = $this->getUser();
        $manager = $this->getDoctrine()->getManager();
        $repositoryCharacterUsed = $manager->getRepository('PMCharacterBundle:CharacterUsed');
 
        $characterUsed = $repositoryCharacterUsed->findOneBy(array('slug' => $slug, 'user' => $current_user));
        
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage : [slug='.$slug.'] inexistant.');
        }
        
        $serviceCharacterUsedDnD = $this->container->get('pm_character.characteruseddnd');
        $serviceCharacterUsedAbility = $this->container->get('pm_character.characterusedability');
        $serviceCharacterUsedST = $this->container->get('pm_character.characterusedst');
        //Ability :
        $abilities = $serviceCharacterUsedAbility->getAbilities($characterUsed);
        $babs = $serviceCharacterUsedDnD->getBAB($characterUsed);
        $grappleModifiers = $serviceCharacterUsedDnD->getGrappleModifier($characterUsed);
        $ac = $serviceCharacterUsedDnD->getAC($characterUsed);
        $touchAC = $serviceCharacterUsedDnD->getTouchAC($characterUsed);
        $fFAC = $serviceCharacterUsedDnD->getFFAC($characterUsed);
        $fortitude = $serviceCharacterUsedST->getFortitude($characterUsed);
        $reflex = $serviceCharacterUsedST->getRefLex($characterUsed);
        $will = $serviceCharacterUsedST->getWill($characterUsed);
        $speed = $serviceCharacterUsedDnD->getSpeed($characterUsed);
        $initiative = $serviceCharacterUsedDnD->getInitiativeModifier($characterUsed);
        $xpForLevelUp = $serviceCharacterUsedDnD->getXpPointsForLevelUp($characterUsed);

        return $this->render('PMCharacterBundle:CharacterUsedPublic:view_content.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'abilities' => $abilities,
                                'babs' => $babs,
                                'grappleModifiers' => $grappleModifiers,
                                'ac' => $ac,
                                'touchAC' => $touchAC,
                                'fFAC' => $fFAC,
                                'fortitude' => $fortitude,
                                'reflex' => $reflex,
                                'will' => $will,
                                'speed' => $speed,
                                'initiative' => $initiative,
                                'xpForLevelUp' => $xpForLevelUp
                            ));
    }
}
