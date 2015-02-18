<?php

namespace PM\MonsterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\MonsterBundle\Entity\MonsterType;
use PM\MonsterBundle\Form\MonsterTypeRegisterType;
use PM\MonsterBundle\Form\MonsterTypeEditType;

class MonsterTypeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMMonsterBundle:MonsterType:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $monstertype = new MonsterType;
        $monstertype->setCreateUser($current_user);
        
        $form = $this->createForm(new MonsterTypeRegisterType, $monstertype);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($monstertype);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre type de monstre a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_monstertype_administration_view', array('slug' => $monstertype->getSlug())));
                }
            }
        return $this->render('PMMonsterBundle:MonsterType:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:MonsterType');
 
        $monstertype = $repository->findOneBySlug($slug);

        if ($monstertype === null) {
          throw $this->createNotFoundException('MonsterType : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMMonsterBundle:MonsterType:view.html.twig', array(
                                'monstertype' => $monstertype,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:MonsterType');
 
        $monstertype = $repository->findOneBySlug($slug);

        if ($monstertype === null) {
          throw $this->createNotFoundException('MonsterType : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new MonsterTypeEditType, $monstertype);
        
        $current_user = $this->getUser();
        $monstertype->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($monstertype);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre type de monstre a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_monstertype_administration_view', array('slug' => $monstertype->getSlug())));
                }
            }
        
        return $this->render('PMMonsterBundle:MonsterType:edit.html.twig', array(
                                'monstertype' => $monstertype,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:MonsterType');
 
        $listMonsterTypes = $repository->findAll();

        return $this->render('PMMonsterBundle:MonsterType:listMonsterTypes.html.twig', array(
                                'listMonsterTypes' => $listMonsterTypes,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMMonsterBundle:MonsterType');
        $monstertype = $repository->findOneBySlug($slug);
        
        if ($monstertype === null) {
          throw $this->createNotFoundException('MonsterType : [slug='.$slug.'] inexistant.');
        }
        
        $monstertypeAction = $this->container->get('pm_monster.monstertypeaction');
        $monstertypeAction->deleteMonsterType($monstertype);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre type de monstre a bien été supprimé.' );
        return $this->forward('PMMonsterBundle:MonsterType:list');
    }
}
