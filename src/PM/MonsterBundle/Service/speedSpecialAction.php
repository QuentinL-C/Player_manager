<?php

namespace PM\MonsterBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class speedSpecialAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteSpeedSpecial($speedspecial)
    {
        /* A supprimer avec un speedspecial :
         *  -> SpeedSpecial : Entité SpeedSpecial
         *  -> A voir pour le reste
         */
        
        $this->em->remove($speedspecial);
        $this->em->flush();
    }
}
