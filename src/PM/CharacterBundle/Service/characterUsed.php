<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;
use PM\CharacterBundle\Service\Modifier;

class characterUsed 
{
    protected $em;
    protected $security;
    protected $modifier;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context, Modifier $modifier)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
        $this->modifier = $modifier;
    }
    
    public function getStrength($characterUsed) { 
        // Retourne la Force du Personnage
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
	$strength = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => 1));

	return $strength->getValue();
    }

    public function getStrengthModifier($characterUsed) { 
        // Retourne le Modificateur de Force du Personnage
        $strength = $this->getStrength($characterUsed);
        $strengthModifier = $this->modifier->abilityModifier($strength);

        return $strengthModifier;
    }

    public function getDexterity($characterUsed) { 
        // Retourne la Dextérité du Personnage
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
        $dexterity = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => 2));

        return $dexterity->getValue();
    }

    public function getDexterityModifier($characterUsed) { 
        // Retourne le Modificateur de Dextérité du Personnage
        $dexterity = $this->getDexterity($characterUsed);
        $dexterityModifier = $this->modifier->abilityModifier($dexterity);

        return $dexterityModifier;
    }

    public function getConstitution($characterUsed) { 
        // Retourne la Constitution du Personnage
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
        $constitution = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => 3));

        return $constitution->getValue();
    }

    public function getConstitutionModifier($characterUsed) { 
        // Retourne le Modificateur de Intelligence du Personnage
        $constitution = $this->getConstitution($characterUsed);
        $constitutionModifier = $this->modifier->abilityModifier($constitution);

        return $constitutionModifier;
    }


    public function getIntelligence($characterUsed) { 
        // Retourne l'Intelligence du Personnage
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
        $intelligence = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => 4));

        return $intelligence->getValue();
    }

    public function getIntelligenceModifier($characterUsed) { 
        // Retourne le Modificateur de Intelligence du Personnage
        $intelligence = $this->getIntelligence($characterUsed);
        $intelligenceModifier = $this->modifier->abilityModifier($intelligence);

        return $intelligenceModifier;
    }

    public function getWisdom($characterUsed) { 
        // Retourne la Sagesse du Personnage
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
        $wisdom = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => 5));

        return $wisdom->getValue();
    }

    public function getWisdomModifier($characterUsed) { 
        // Retourne le Modificateur de Sagesse du Personnage
        $wisdom = $this->getWisdom($characterUsed);
        $wisdomModifier = $this->modifier->abilityModifier($wisdom);

        return $wisdomModifier;
    }

    public function getCharisma($characterUsed) { 
        //Retourne le Charisme du Personnage
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
        $charisma = $repositoryAbility->findOneBy(array('characterUsed' => $characterUsed, 'type' => 6));

        return $charisma->getValue();
    }

    public function getCharismaModifier($characterUsed) { 
        //Retourne le Modificateur de Charisme du Personnage
        $charisma = $this->getCharisma($characterUsed);
        $charismaModifier = $this->modifier->abilityModifier($charisma);
        
        return $charismaModifier;
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
                if($weaponCurrent->getType() == 'infighting') {$ability = $this->getStrengthModifier($characterUsed);}
                elseif($weaponCurrent->getType() == 'fire') {$ability = $this->getDexterityModifier($characterUsed);}
                else {$ability = $this->getStrengthModifier($characterUsed);}
        }
        else {$ability = $this->getStrengthModifier($characterUsed);}

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

        $dexterityModifier = $this->getDexterityModifier($characterUsed);
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

        $dexterityModifier = $this->getDexterityModifier($characterUsed);
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

    public function getFortitude($characterUsed) { 
        //Retourne le JdS Réflex du personnage 
        //Mod. de Caractéristique à prendre en compte : Dextérité
        $modBases = array();
        
        $classDnDInstances = $characterUsed->getClassDnDInstances();
        foreach ($classDnDInstances as $classDnDInstance) {
            $classDnD = $classDnDInstance->getClassDnD();
            $level = $classDnDInstance->getLevel();
            
            $repositoryClassST = $this->em->getRepository('PMCharacterBundle:ClassST');
            $classST = $repositoryClassST->findOneBy(array('classDnD' => $classDnD, 'lvl' => $level));
            array_push($modBases, $classST->getFortitude());
        }
        arsort($modBases); //Tri par ordre décroissant
        
        $modBase = $modBases[0];
        $modAbility = $this->getDexterityModifier($characterUsed);
        $modMagic = 0;
        $modDivers = 0;
        $modTempo = 0;

        $fortitude = $modBase + $modAbility + $modMagic + $modDivers + $modTempo;
        return $fortitude;
    }

    public function getReflex($characterUsed) { 
        //Retourne le JdS Vigueur du personnage
        //Mod. de Caractéristique à prendre en compte : Constitution
        $modBases = array();
        
        $classDnDInstances = $characterUsed->getClassDnDInstances();
        foreach ($classDnDInstances as $classDnDInstance) {
            $classDnD = $classDnDInstance->getClassDnD();
            $level = $classDnDInstance->getLevel();
            
            $repositoryClassST = $this->em->getRepository('PMCharacterBundle:ClassST');
            $classST = $repositoryClassST->findOneBy(array('classDnD' => $classDnD, 'lvl' => $level));
            array_push($modBases, $classST->getReflex());
        }
        arsort($modBases); //Tri par ordre décroissant
        
        $modBase = $modBases[0];
        $modAbility = $this->getConstitutionModifier($characterUsed);
        $modMagic = 0;
        $modDivers = 0;
        $modTempo = 0;

        $fortitude = $modBase + $modAbility + $modMagic + $modDivers + $modTempo;
        return $fortitude;
    }

    public function getWill($characterUsed) { 
        //Retourne le JdS Volonté du personnage
        //Mod. de Caractéristique à prendre en compte : Sagesse
        $modBases = array();
        
        $classDnDInstances = $characterUsed->getClassDnDInstances();
        foreach ($classDnDInstances as $classDnDInstance) {
            $classDnD = $classDnDInstance->getClassDnD();
            $level = $classDnDInstance->getLevel();
            
            $repositoryClassST = $this->em->getRepository('PMCharacterBundle:ClassST');
            $classST = $repositoryClassST->findOneBy(array('classDnD' => $classDnD, 'lvl' => $level));
            array_push($modBases, $classST->getWill());
        }
        arsort($modBases); //Tri par ordre décroissant
        
        $modBase = $modBases[0];
        $modAbility = $this->getWisdomModifier($characterUsed);
        $modMagic = 0;
        $modDivers = 0;
        $modTempo = 0;

        $fortitude = $modBase + $modAbility + $modMagic + $modDivers + $modTempo;
        return $fortitude;
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
        $dexterityModifier = $this->getDexterityModifier($characterUsed);
        $initiativeModifier += $dexterityModifier;

        return $initiativeModifier;
    }
    
    public function deleteCharacterUsed($characterUsed)
    {
        /* A supprimer avec un personnage :
         *  -> Ability : caractéristiques du personnage
         *  -> CharacterLanguage : langues du personnage
         *  -> CharacterSkill : compétences du personnage
         *  -> CharacterWealth : richesse du personnage -> Cascade remove
         *  -> ClassDnDInstance : classe du personnage
         *  -> XpPoints : XP du personnage
         */
        
        $repositoryAbility = $this->em->getRepository('PMCharacterBundle:Ability');
        $abilities = $repositoryAbility->findBy(array('characterUsed' => $characterUsed));
        foreach ($abilities as $abilitie) {
            $this->em->remove($abilitie);
        }
        
        $repositoryCharacterLanguage = $this->em->getRepository('PMCharacterBundle:CharacterLanguage');
        $languages = $repositoryCharacterLanguage->findBy(array('characterUsed' => $characterUsed));
        foreach ($languages as $language) {
            $this->em->remove($language);
        }
        
        $repositoryCharacterSkill = $this->em->getRepository('PMCharacterBundle:CharacterSkill');
        $skills = $repositoryCharacterSkill ->findBy(array('characterUsed' => $characterUsed));
        foreach ($skills as $skill) {
            $this->em->remove($skill);
        }
        
        $repositoryClassDnDInstance = $this->em->getRepository('PMCharacterBundle:ClassDnDInstance');
        $instances = $repositoryClassDnDInstance ->findBy(array('characterUsed' => $characterUsed));
        foreach ($instances as $instance) {
            $this->em->remove($instance);
        }
        
        $this->em->remove($characterUsed);
        $this->em->flush();
    }
}
