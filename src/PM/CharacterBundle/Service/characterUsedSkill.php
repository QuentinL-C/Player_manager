<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class characterUsedSkill
{
    protected $em;
    protected $security;
    protected $characterusedability;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context, CharacterUsedAbility $characterusedability)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
        $this->characterusedability = $characterusedability;
    }
    
    public function getCharacterSkillModifier($characterSkill, $detail=false) {
        // Retourne le modificateur de compétence
        if ($characterSkill === null) {
          throw $this->createNotFoundException('Liaison de Compétence inexistante.');
        }
        
        // -- Obtention du Modificateur de Caractéristique pour la caractéristique valable sur la compétence en cours
        $abilitySkill = $characterSkill->getSkill()->getAbility();
        $abilityCharacter = $this->characterusedability->getAbility($characterSkill->getCharacterUsed(), $abilitySkill);
        $abilityCharacterModifier = $this->characterusedability->getAbilityModifier($abilityCharacter);
        
        // -- Obtention du degré de maitrise de la compétence en cours :
        $skillRanks = $characterSkill->getRanks();
        
        // -- Addition finale :
        if($detail == false) {$skillModifier = $skillRanks + $abilityCharacterModifier;}
        elseif($detail == true) {$skillModifier = "<abbr title=\"Degré de Maitrise\">" . $skillRanks . "</abbr> + <abbr title=\"Mod. de Caractéristique (". $abilitySkill->getName() .")\">" . $abilityCharacterModifier . "</abbr>";}
        return $skillModifier;
    }
    
    public function getMaxRanksForSkill($characterSkill) {
        // Retourne le degré de maitrise maximum qu'un joueur peut attribuer à son personnage pour une compétence
        if ($characterSkill === null) {
          throw $this->createNotFoundException('Liaison de Compétence inexistante.');
        }
        
        /*
         * Calcul : -> On regarde si la compétence est une compétence de classe pour une des classes du perso
         * Si oui : retourne le nb de pt pour compétence de classe pour ce niveau, si non le nb de points pour compétence hors classe
         */
        
        $skill = $characterSkill->getSkill();
        $match = false;
        
        $classDnDInstances = $characterSkill->getCharacterUsed()->getClassDnDInstances();
        foreach ($classDnDInstances as $classDnDInstance) {
            $skillsClass = $classDnDInstance->getClassDnD()->getSkills();
            foreach($skillsClass as $skillClass) {
                if($skillClass == $skill) 
                {
                    $match = true; 
                    $matchClassDnDInstance = $classDnDInstance;
                    break;
                }
            }
        }
        
        if($match == true) {$maxRanks = $matchClassDnDInstance->getLevel()->getclassSkillModifier();}
        elseif($match == false) {$maxRanks = $matchClassDnDInstance->getLevel()->getofClassSkillModifier();}
        
        return $maxRanks;
    }
}
