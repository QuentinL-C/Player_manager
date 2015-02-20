<?php

namespace PM\WeaponBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class weaponAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteWeapon($weapon)
    {
        /* A supprimer avec un weapon :
         *  -> Weapon : Entité Weapon
         *  -> A voir pour le reste
         */
        
        $this->em->remove($weapon);
        $this->em->flush();
    }
}
