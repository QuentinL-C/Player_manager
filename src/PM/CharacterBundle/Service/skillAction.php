<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;
use PM\CharacterBundle\Entity\CharacterSkill;
use PM\MonsterBundle\Entity\MonsterSkillInstance;

class skillAction
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteSkill($skill)
    {
        /* A supprimer avec une compétence :
         *  -> Skill : Entité competence
         *  -> A voir pour le reste
         */
        
        $this->em->remove($skill);
        $this->em->flush();
    }
    
    public function getSkillforCharacters($skill)
    {
        $current_user = $this->security->getUser();
        
        $repository = $this->em->getRepository('PMCharacterBundle:CharacterUsed');
        $characterUseds = $repository->findAll();
        
        foreach ($characterUseds as $characterUsed) {
            $characterSkill = new CharacterSkill;
            $characterSkill->setCreateUser($current_user);
            $characterSkill->setCharacterUsed($characterUsed);
            $characterSkill->setSkill($skill);
            $characterSkill->setRanks(0);
            
            $this->em->persist($characterSkill);
        }
        
        $this->em->flush();
    }
    
    public function getSkillforMonsters($skill)
    {
        $current_user = $this->security->getUser();
        
        $repository = $this->em->getRepository('PMMonsterBundle:Monster');
        $monsters = $repository->findAll();
        
        foreach ($monsters as $monster) {
            $monsterSkillInstance = new MonsterSkillInstance;
            $monsterSkillInstance->setCreateUser($current_user);
            $monsterSkillInstance->setMonster($monster);
            $monsterSkillInstance->setSkill($skill);
            $monsterSkillInstance->setRanks(0);
            
            $this->em->persist($monsterSkillInstance);
        }
        
        $this->em->flush();
    }
}
