<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteAlignment 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteAlignment($alignment)
    {
        /* A supprimer avec un alignement :
         *  -> Alignment : Entité alignement
         *  -> CharacterUsed.Alignment : Personnage ayant un alignement de ce type
         */
        
        $this->em->remove($alignment);
        $this->em->flush();
    }
}
