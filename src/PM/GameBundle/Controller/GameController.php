<?php

namespace PM\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\GameBundle\Entity\Game;
use PM\GameBundle\Form\GameRegisterType;
use PM\GameBundle\Form\GameEditType;

class GameController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMGameBundle:Game:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $game = new Game;
        $game->setCreateUser($current_user);
        
        $form = $this->createForm(new GameRegisterType, $game);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($game);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la partie a bien été créée.' );
                    return $this->redirect($this->generateUrl('pm_game_administration_view', array('slug' => $game->getSlug())));
                }
            }
        return $this->render('PMGameBundle:Game:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGameBundle:Game');
 
        $game = $repository->findOneBySlug($slug);

        if ($game === null) {
          throw $this->createNotFoundException('Game : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMGameBundle:Game:view.html.twig', array(
                                'game' => $game,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGameBundle:Game');
 
        $game = $repository->findOneBySlug($slug);

        if ($game === null) {
          throw $this->createNotFoundException('Game : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new GameEditType, $game);
        
        $current_user = $this->getUser();
        $game->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($game);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre partie a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_game_administration_view', array('slug' => $game->getSlug())));
                }
            }
        
        return $this->render('PMGameBundle:Game:edit.html.twig', array(
                                'game' => $game,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMGameBundle:Game');
 
        $listGames = $repository->findAll();

        return $this->render('PMGameBundle:Game:listGames.html.twig', array(
                                'listGames' => $listGames,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMGameBundle:Game');
        $game = $repository->findOneBySlug($slug);
        
        if ($game === null) {
          throw $this->createNotFoundException('Game : [slug='.$slug.'] inexistant.');
        }
        
        $gameAction = $this->container->get('pm_game.gameaction');
        $gameAction->deleteGame($game);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre partie a bien été supprimée.' );
        return $this->forward('PMGameBundle:Game:list');
    }
}
