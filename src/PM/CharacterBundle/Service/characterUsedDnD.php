<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class characterUsedDnD
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
    
    public function getBAB($characterUsed) { 
        //Retourne le BBA du personnage)
        //Si 1 classe -> récupère la classe et le niveau et regarde la concordance BBA sur la table de la classe -> retourne un array (cas où il y a plusieurs attaques)
        //Si plusieurs classes POUR PLUS TARD : A VERIFIER -> compare les différentes classes et les différents niveaux de BBA par classe pour sélectionner le meilleur.

        $classDnDInstances = $characterUsed->getClassDnDInstances();
        //ATTENTION ! La boucle ci-dessous ne marche que s'il n'y a qu'une ClassDnDInstance par CharacterUsed !
        foreach ($classDnDInstances as $classDnDInstance) {
            $level = $classDnDInstance->getLevel();
            $classDnD = $classDnDInstance->getClassDnD();
        }
        $repositoryClassBAB = $this->em->getRepository('PMCharacterBundle:ClassBAB');
        $babs = $repositoryClassBAB->findBy(array('classDnD' => $classDnD, 'lvl' => $level), array('value' => 'ASC'));

        return $babs;
    }

    public function getGrappleModifier($characterUsed) { 
        //Retourne le Modificateur de Lutte du personnage
        //ATTENTION ! FONCTION NON COMPATIBLE AVEC LES PERSONNAGES MULTI-CLASSES
        $grappleModifiers = array();
        $babs = $this->getBAB($characterUsed);

        $weaponCurrent = $this->getWeaponCurrent($characterUsed);
        if($weaponCurrent != NULL)
        {
                $weaponCurrent = New Weapon;
                if($weaponCurrent->getType() == 'infighting') {$ability = $this->characterusedability->getStrengthModifier($characterUsed);}
                elseif($weaponCurrent->getType() == 'fire') {$ability = $this->getDexterityModifier($characterUsed);}
                else {$ability = $this->characterusedability->getStrengthModifier($characterUsed);}
        }
        else {$ability = $this->characterusedability->getStrengthModifier($characterUsed);}

        $size = $characterUsed->getRace()->getSize();

        foreach ($babs as $bab) {
            
            $grappleModifier = $bab->getValue() + $ability + $size->getModifier(); // Ajouter plus tard les modificateurs divers (dons, sorts …)
            // !! Prendre en compte le malus de porté pour les armes de tir !!
        
            array_push($grappleModifiers, $grappleModifier);
        }
        
        return $grappleModifiers;
    }

    public function getWeaponCurrent($characterUsed) { 
        //Retourne l’arme portée par le personnage
        return NULL;
    }

    public function getAC($characterUsed) { 
        //Retourne la CA du personnage
        $armor = $this->getAW($characterUsed);
        if($armor != NULL) {$armorBonus = $this->getAW($characterUsed)->getBonus();}
        else {$armorBonus = 0;}

        $shield = $this->getSC($characterUsed);
        if($shield != NULL) {$armorBonus = $this->getSC($characterUsed)->getBonus();}
        else {$shieldBonus = 0;}

        $dexterityModifier = $this->characterusedability->getDexterityModifier($characterUsed);
        $naturalArmor = 0;
        $deflectionModifer = 0;

        $size = $characterUsed->getRace()->getSize();

        $ac = 10 + $armorBonus + $shieldBonus + $dexterityModifier + $size->getModifier() + $naturalArmor + $deflectionModifer; // $deflectionModifer = Modificateur de parade -- Ajouter plus tard les modificateurs divers (dons, sorts …)
        return $ac;
    }

    public function getTouchAC($characterUsed) { 
        //Retourne la CA de Contact du personnage
        /* Attaques de contact. 
         * Certaines attaques ne tiennent aucun compte de l’armure, du bouclier ou de l’armure naturelle. 
         * Dans ce cas, l’attaquant effectue un jet d’attaque de contact (soit au corps au corps, soit à distance). 
         * Ce jet d’attaque se joue normalement, mais la CA de la cible n’inclut pas ses bonus d’armure, de bouclier ou d’armure naturelle. 
         * Par contre, son modificateur de taille s’applique normalement, de même que ses bonus de Dextérité et de parade.
         */

        $dexterityModifier = $this->characterusedability->getDexterityModifier($characterUsed);
        $deflectionModifer = 0;

        $size = $characterUsed->getRace()->getSize();

        $ac = 10 + $dexterityModifier + $size->getModifier() + $deflectionModifer; // $deflectionModifer = Modificateur de parade -- Ajouter plus tard les modificateurs divers (dons, sorts …)
        return $ac;
    }

    public function getFFAC($characterUsed) { 
        // Retourne la CA de prise au dépourvu du personnage
        /* Tout personnage n’ayant pas encore entamé d’action au cours d’un combat est automatiquement pris au dépourvu. 
         * Il perd son éventuel bonus de Dextérité à la CA et n’a pas la possibilité de lancer une attaque d’opportunité.-> 
         * plus d’info sur http://forums.ffjdr.org/viewtopic.php?t=13456 
         */

        $armor = $this->getAW($characterUsed);
        if($armor != NULL) {$armorBonus = $this->getAW()->getBonus($characterUsed);}
        else {$armorBonus = 0;}

        $shield = $this->getSC($characterUsed);
        if($shield != NULL) {$armorBonus = $this->getSC($characterUsed)->getBonus();}
        else {$shieldBonus = 0;}

        $naturalArmor = 0;
        $deflectionModifer = 0;

        $size = $characterUsed->getRace()->getSize();

        $ac = 10 + $armorBonus + $shieldBonus + $size->getModifier() + $naturalArmor + $deflectionModifer; // $deflectionModifer = Modificateur de parade -- Ajouter plus tard les modificateurs divers (dons, sorts …)
        return $ac;
    }

    public function getAW($characterUsed) { 
        //Retourne l’armure portée portée par le personnage
        return NULL;
    }

    public function getSC($characterUsed) { 
        //Retourne le bouclier porté par le personnage
        return NULL;
    }

    public function getSpeed($characterUsed) { 
        //Retourne la vitesse du personnage
        //Correspond à la vitesse de déplacement de base au sol de la race du personnage.
        //Attention, de nombreuses règles sont à prendre en compte pour les déplacements en combat. A voir dans le livre de règle. Pas à prendre en compte dans la version de base

        $speed = $characterUsed->getRace()->getSpeed();

        return $speed;
    }

    public function getInitiativeModifier($characterUsed) { 
        //Retourne l’initiative du personnage
        //ModifierInitiative est égal au modificateur de Dextérité du perso. Peut entrer en compte le don Science de l’initiative.
        $initiativeModifier = 0;
        $dexterityModifier = $this->characterusedability->getDexterityModifier($characterUsed);
        $initiativeModifier += $dexterityModifier;

        return $initiativeModifier;
    }
}
