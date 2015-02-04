<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteLevel 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteLevel($level)
    {
        /* A supprimer avec une taille :
         *  -> Level : Entité level
         *  -> A voir pour le reste
         */
        
        $this->em->remove($level);
        $this->em->flush();
    }
}
