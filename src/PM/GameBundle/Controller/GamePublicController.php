<?php

namespace PM\GameBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\GameBundle\Entity\Game;

class GamePublicController extends Controller
{
    public function indexAction()
    {
        $current_user = $this->getUser();
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGameBundle:Game');
 
        $listGames = $repository->findMyGamesByCharacter($current_user);
        $listGamesMa = $repository->findMyGamesByGameMaster($current_user);

        return $this->render('PMGameBundle:GamePublic:index.html.twig', array(
                                'listGames' => $listGames,
                                'listGamesMa' => $listGamesMa,
                            ));
    }
    
    public function viewAction($slug)
    {
        $manager = $this->getDoctrine()->getManager();
        $repositoryGame = $manager->getRepository('PMGameBundle:Game');
        $current_user = $this->getUser();
 
        $gameAction = $this->container->get('pm_game.gameaction');
        $game = $repositoryGame->findOneBy(array('slug' => $slug));
        $isCharacter = $gameAction->isPlayer($game, $current_user);
        $isMJ = $gameAction->isMJ($game, $current_user);
        
        
        if ($game === null) {
          throw $this->createNotFoundException('Partie : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMGameBundle:GamePublic:view.html.twig', array(
                                'game' => $game,
                                'isCharacter' => $isCharacter,
                                'isMJ' => $isMJ
                            ));
    }
}
