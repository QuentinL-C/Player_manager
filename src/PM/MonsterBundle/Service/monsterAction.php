<?php

namespace PM\MonsterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class monsterAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteMonster($monster)
    {
        /* A supprimer avec un monstre :
         *  -> Monster : Entité monstre
         *  -> A voir pour le reste
         */
        
        $this->em->remove($monster);
        $this->em->flush();
    }
}
