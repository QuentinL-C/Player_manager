<?php

namespace PM\MonsterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class environmentAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteEnvironment($environment)
    {
        /* A supprimer avec un environment :
         *  -> Environment : Entité Environment
         *  -> A voir pour le reste
         */
        
        $this->em->remove($environment);
        $this->em->flush();
    }
}
