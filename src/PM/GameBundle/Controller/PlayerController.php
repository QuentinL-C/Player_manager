<?php

namespace PM\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    public function indexAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGameBundle:Game');
 
        $game = $repository->findOneBySlug($slug);

        if ($game === null) {
          throw $this->createNotFoundException('Game : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMGameBundle:Player:index.html.twig', array(
                                'game' => $game,
                            ));
    }
}
