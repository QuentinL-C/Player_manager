<?php

namespace PM\WeaponBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class weaponTypeAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteWeaponType($weapontype)
    {
        /* A supprimer avec un weapontype :
         *  -> WeaponType : Entité WeaponType
         *  -> A voir pour le reste
         */
        
        $this->em->remove($weapontype);
        $this->em->flush();
    }
}
