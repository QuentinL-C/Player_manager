<?php

namespace PM\GameBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;

class gameAction 
{
    protected $em;
    protected $security;

    public function __construct(EntityManager $EntityManager, SecurityContext $security_context)
    {
        $this->em = $EntityManager;
        $this->security = $security_context;
    }
    
    public function deleteGame($game)
    {
        /* A supprimer avec un game :
         *  -> Game : Entité Game
         *  -> A voir pour le reste
         */
        
        $this->em->remove($game);
        $this->em->flush();
    }
    
    public function setCharacter($game, $user)
    {
        /*
         * Fonction retournant le personnage d'un joueur pour une partie
         */
        
        foreach ($game->getCharacters() as $character) {
            if($character->getUser() == $user)
            {
                return $character;
                break;
            }
        }
    }
}
