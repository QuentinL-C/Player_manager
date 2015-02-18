<?php

namespace PM\MonsterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class monsterTypeAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteMonsterType($monstertype)
    {
        /* A supprimer avec un monstertype :
         *  -> MonsterType : Entité MonsterType
         *  -> A voir pour le reste
         */
        
        $this->em->remove($monstertype);
        $this->em->flush();
    }
}
