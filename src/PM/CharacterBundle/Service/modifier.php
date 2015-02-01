<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class modifier 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }

    public function abilityModifier($abilityValue) { 
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
}
