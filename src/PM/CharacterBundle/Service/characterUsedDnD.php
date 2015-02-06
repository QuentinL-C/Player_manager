<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;
use \PM\CharacterBundle\Entity\XpPoints;

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

        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
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
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
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
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        return NULL;
    }

    public function getAC($characterUsed) { 
        //Retourne la CA du personnage
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
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
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }

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
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }

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
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        return NULL;
    }

    public function getSC($characterUsed) { 
        //Retourne le bouclier porté par le personnage
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        return NULL;
    }

    public function getSpeed($characterUsed) { 
        //Retourne la vitesse du personnage
        //Correspond à la vitesse de déplacement de base au sol de la race du personnage.
        //Attention, de nombreuses règles sont à prendre en compte pour les déplacements en combat. A voir dans le livre de règle. Pas à prendre en compte dans la version de base
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }

        $speed = $characterUsed->getRace()->getSpeed();

        return $speed;
    }

    public function getInitiativeModifier($characterUsed) { 
        //Retourne l’initiative du personnage
        //ModifierInitiative est égal au modificateur de Dextérité du perso. Peut entrer en compte le don Science de l’initiative.
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        $initiativeModifier = 0;
        $dexterityModifier = $this->characterusedability->getDexterityModifier($characterUsed);
        $initiativeModifier += $dexterityModifier;

        return $initiativeModifier;
    }
    
    public function getGlobalLevel($characterUsed) {
        //Retourne le niveau global d'un personnage
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        $globalLevel = 0;
        $classDnDInstances = $characterUsed->getClassDnDInstances();
        foreach ($classDnDInstances as $classDnDInstance) {
            $classLevel = $classDnDInstance->getLevel()->getLevel();
            $globalLevel += $classLevel;
        }
        
        return $globalLevel;
    }
    
    public function getXpPoints($characterUsed) {
        //Retourne les points d'expérience d'un personnage
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        $xp = 0;
        $repositoryXpPoints = $this->em->getRepository('PMCharacterBundle:XpPoints');
        $listXpPoints = $repositoryXpPoints->findBy(array('characterUsed' => $characterUsed));
        
        foreach ($listXpPoints as $xpPoints) {
            $xp += $xpPoints->getIncrease();
        }
        
        return $xp;
    }
    
    public function setXpPoints($characterUsed, $increase, $current_user) {
        // Méthode d'insertion de pts d'XP à un personnage.
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        if (!is_int($increase)) {
          throw $this->createNotFoundException('Valeur incorrecte.');
        }
        
        if ($current_user === null) {
          throw $this->createNotFoundException('Utilisateur inexistant.');
        }
        
        $xpPoints = new XpPoints;
        $xpPoints->setCreateUser($current_user);
        $xpPoints->setCharacterUsed($characterUsed);
        $xpPoints->setIncrease($increase);
        
        $this->em->persist($xpPoints);
        $this->em->flush();
        
        $newLevel = $this->isNewLevel($characterUsed);
        return $newLevel;
    }
    
    public function getXpPointsForLevelUp($characterUsed) {
        //Retourne le nombre de points d'expérience nécessaires pour passer au prochain lvl
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        $globalLevel = $this->getGlobalLevel($characterUsed);
        
        $repositoryLevel = $this->em->getRepository('PMCharacterBundle:Level');
        $level = $repositoryLevel->findOneBy(array('level' => $globalLevel+1));
        
        return $level->getXpPoints();
    }
    
    public function isNewLevel($characterUsed) {
        //Retourne un booléen : le personnage gagne-t-il un niveau ?
        if ($characterUsed === null) {
          throw $this->createNotFoundException('Personnage inexistant.');
        }
        
        $isNewLevel = false;
        if($this->getXpPoints($characterUsed) >= $this->getXpPointsForLevelUp($characterUsed)) {$isNewLevel = true;}
        
        return $isNewLevel;
    }
}
