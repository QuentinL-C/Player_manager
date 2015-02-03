<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class characterUsedAbility
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    private function getAbility ($characterUsed, $abilityType, $detail=false) {
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
	$abilityBase = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => $abilityType));
        $repositoryRaceAbility = $this->em->getRepository('PMCharacterBundle:RaceAbility');
	$abilityRace = $repositoryRaceAbility->findOneBy(array('race' => $characterUsed->getRace(), 'type' => $abilityType));

        if($detail == true) {$ability = $abilityBase->getValue().' + '.$abilityRace->getValue();}
        else {$ability = $abilityBase->getValue() + $abilityRace->getValue();}
        
	return $ability;
    }
    
    private function abilityModifier($abilityValue) { 
        //Fonction retournant le modificateur d’une caractéristique
        
        $abilityModifier = 0;
        if($abilityValue >= 10) {
            if($abilityValue == 10 OR $abilityValue == 11) {
                $abilityModifier = 0;
            }
            else {
                if($abilityValue%2 == 0) { //Nombre pair
                    $abilityModifier = ($abilityValue-10)/2;
                }
                elseif($abilityValue%2 == 1) { //Nombre impair
                    $abilityModifier = ($abilityValue-11)/2;
                }
            }
        }
        elseif($abilityValue < 10) {
            switch ($abilityValue) {
                case 1:
                    $abilityModifier = -5;
                    break;
                case 2:
                    $abilityModifier = -4;
                    break;
                case 3:
                    $abilityModifier = -4;
                    break;
                case 4:
                    $abilityModifier = -3;
                    break;
                case 5:
                    $abilityModifier = -3;
                    break;
                case 6:
                    $abilityModifier = -2;
                    break;
                case 7:
                    $abilityModifier = -2;
                    break;
                case 8:
                    $abilityModifier = -1;
                    break;
                case 9:
                    $abilityModifier = -1;
                    break;
            }
        }

        return $abilityModifier;
    }
    
    public function getStrength($characterUsed, $detail=false) { 
        // Retourne la Force du Personnage
        return $this->getAbility($characterUsed, 1, $detail);
    }

    public function getStrengthModifier($characterUsed) { 
        // Retourne le Modificateur de Force du Personnage
        $strength = $this->getStrength($characterUsed);
        $strengthModifier = $this->abilityModifier($strength);

        return $strengthModifier;
    }

    public function getDexterity($characterUsed, $detail=false) { 
        // Retourne la Dextérité du Personnage
        return $this->getAbility($characterUsed, 2, $detail);
    }

    public function getDexterityModifier($characterUsed) { 
        // Retourne le Modificateur de Dextérité du Personnage
        $dexterity = $this->getDexterity($characterUsed);
        $dexterityModifier = $this->abilityModifier($dexterity);

        return $dexterityModifier;
    }

    public function getConstitution($characterUsed, $detail=false) { 
        // Retourne la Constitution du Personnage
        return $this->getAbility($characterUsed, 3, $detail);
    }

    public function getConstitutionModifier($characterUsed) { 
        // Retourne le Modificateur de Intelligence du Personnage
        $constitution = $this->getConstitution($characterUsed);
        $constitutionModifier = $this->abilityModifier($constitution);

        return $constitutionModifier;
    }


    public function getIntelligence($characterUsed, $detail=false) { 
        // Retourne l'Intelligence du Personnage
        return $this->getAbility($characterUsed, 4, $detail);
    }

    public function getIntelligenceModifier($characterUsed) { 
        // Retourne le Modificateur de Intelligence du Personnage
        $intelligence = $this->getIntelligence($characterUsed);
        $intelligenceModifier = $this->abilityModifier($intelligence);

        return $intelligenceModifier;
    }

    public function getWisdom($characterUsed, $detail=false) { 
        // Retourne la Sagesse du Personnage
        return $this->getAbility($characterUsed, 5, $detail);
    }

    public function getWisdomModifier($characterUsed) { 
        // Retourne le Modificateur de Sagesse du Personnage
        $wisdom = $this->getWisdom($characterUsed);
        $wisdomModifier = $this->abilityModifier($wisdom);

        return $wisdomModifier;
    }

    public function getCharisma($characterUsed, $detail=false) { 
        //Retourne le Charisme du Personnage
        return $this->getAbility($characterUsed, 6, $detail);
    }

    public function getCharismaModifier($characterUsed) { 
        //Retourne le Modificateur de Charisme du Personnage
        $charisma = $this->getCharisma($characterUsed);
        $charismaModifier = $this->abilityModifier($charisma);
        
        return $charismaModifier;
    }
    
    public function getAbilities($characterUsed)
    {
        $abilities = array();
        
        for($i = 1; $i <= 6; $i++ ) {
            switch ($i) {
                case 1:
                    $strength = $this->getStrength($characterUsed);
                    array_push($abilities, $strength);
                    break;
                case 2:
                    $dexterity = $this->getDexterity($characterUsed);
                    array_push($abilities, $dexterity);
                    break;
                case 3:
                    $constitution = $this->getConstitution($characterUsed);
                    array_push($abilities, $constitution);
                    break;
                case 4:
                    $intelligence = $this->getIntelligence($characterUsed);
                    array_push($abilities, $intelligence);
                    break;
                case 5:
                    $wisdom = $this->getWisdom($characterUsed);
                    array_push($abilities, $wisdom);
                    break;
                case 6:
                    $charisma = $this->getCharisma($characterUsed);
                    array_push($abilities, $charisma);
                    break;

                default:
                    break;
            }
        }
        
        return $abilities;
    }
}
