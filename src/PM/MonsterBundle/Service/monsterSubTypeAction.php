<?php

namespace PM\MonsterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class monsterSubTypeAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteMonsterSubType($monstersubtype)
    {
        /* A supprimer avec un monstersubtype :
         *  -> MonsterSubType : Entité MonsterSubType
         *  -> A voir pour le reste
         */
        
        $this->em->remove($monstersubtype);
        $this->em->flush();
    }
}
