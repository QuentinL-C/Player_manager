<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteCharacterUsed 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
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
