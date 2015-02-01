<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteClassDnD 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteClassDnD($classDnD)
    {
        /* A supprimer avec une classe :
         *  -> ClassDnD : Entité classe
         * -> A voir pour le reste
         */
        
        $this->em->remove($classDnD);
        $this->em->flush();
    }
}
