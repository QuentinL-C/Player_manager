<?php

namespace PM\CharacterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class deleteSkill 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteSkill($skill)
    {
        /* A supprimer avec une compétence :
         *  -> Skill : Entité competence
         *  -> A voir pour le reste
         */
        
        $this->em->remove($skill);
        $this->em->flush();
    }
}
