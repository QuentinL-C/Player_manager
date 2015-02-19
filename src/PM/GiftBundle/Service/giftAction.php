<?php

namespace PM\GiftBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class giftAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteGift($gift)
    {
        /* A supprimer avec un gift :
         *  -> Gift : Entité Gift
         *  -> A voir pour le reste
         */
        
        $this->em->remove($gift);
        $this->em->flush();
    }
}
