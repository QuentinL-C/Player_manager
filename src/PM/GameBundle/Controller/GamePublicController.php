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
 
        $game = $repositoryGame->findOneBy(array('slug' => $slug));
        
        if ($game === null) {
          throw $this->createNotFoundException('Personnage : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMGameBundle:GamePublic:view.html.twig', array(
                                'game' => $game
                            ));
    }
}
