<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteAbility 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteAbility($ability)
    {
        /* A supprimer avec une taille :
         *  -> Ability : Entité Caractéristique
         *  -> A voir pour le reste
         */
        
        $this->em->remove($ability);
        $this->em->flush();
    }
}
