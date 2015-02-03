<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class characterUsedST
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
        $modAbility = $this->characterusedability->getDexterityModifier($characterUsed);
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
        $modAbility = $this->characterusedability->getConstitutionModifier($characterUsed);
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
        $modAbility = $this->characterusedability->getWisdomModifier($characterUsed);
        $modMagic = 0;
        $modDivers = 0;
        $modTempo = 0;

        $fortitude = $modBase + $modAbility + $modMagic + $modDivers + $modTempo;
        return $fortitude;
    }
}
