<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteLanguage 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteLanguage($language)
    {
        /* A supprimer avec une langue :
         *  -> Language : Entité langue
         * -> A voir pour le reste
         */
        
        $this->em->remove($language);
        $this->em->flush();
    }
}
