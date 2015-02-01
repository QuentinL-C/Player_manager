<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteSize 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteSize($size)
    {
        /* A supprimer avec une taille :
         *  -> Size : Entité taille
         *  -> A voir pour le reste
         */
        
        $this->em->remove($size);
        $this->em->flush();
    }
}
