<?php

namespace PM\MonsterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\MonsterBundle\Entity\Monster;
use PM\MonsterBundle\Form\MonsterRegisterType;
use PM\MonsterBundle\Form\MonsterEditType;

class MonsterController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMMonsterBundle:Monster:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $monster = new Monster;
        $monster->setCreateUser($current_user);
        
        $form = $this->createForm(new MonsterRegisterType, $monster);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($monster);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, le monstre a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_monster_administration_view', array('slug' => $monster->getSlug())));
                }
            }
        return $this->render('PMMonsterBundle:Monster:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:Monster');
 
        $monster = $repository->findOneBySlug($slug);

        if ($monster === null) {
          throw $this->createNotFoundException('Monstre : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMMonsterBundle:Monster:view.html.twig', array(
                                'monster' => $monster,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:Monster');
 
        $monster = $repository->findOneBySlug($slug);

        if ($monster === null) {
          throw $this->createNotFoundException('Monstre : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new MonsterEditType, $monster);
        
        $current_user = $this->getUser();
        $monster->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($monster);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre monstre a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_monster_administration_view', array('slug' => $monster->getSlug())));
                }
            }
        
        return $this->render('PMMonsterBundle:Monster:edit.html.twig', array(
                                'monster' => $monster,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:Monster');
 
        $listMonsters = $repository->findAll();

        return $this->render('PMMonsterBundle:Monster:listMonsters.html.twig', array(
                                'listMonsters' => $listMonsters,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMMonsterBundle:Monster');
        $monster = $repository->findOneBySlug($slug);
        
        if ($monster === null) {
          throw $this->createNotFoundException('Monstre : [slug='.$slug.'] inexistant.');
        }
        
        $monsterAction = $this->container->get('pm_monster.monsteraction');
        $monsterAction->deleteMonster($monster);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre monstre a bien été supprimé.' );
        return $this->forward('PMMonsterBundle:Monster:list');
    }
}
