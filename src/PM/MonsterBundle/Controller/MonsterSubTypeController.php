<?php

namespace PM\MonsterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\MonsterBundle\Entity\MonsterSubType;
use PM\MonsterBundle\Form\MonsterSubTypeRegisterType;
use PM\MonsterBundle\Form\MonsterSubTypeEditType;

class MonsterSubTypeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMMonsterBundle:MonsterSubType:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $monstersubtype = new MonsterSubType;
        $monstersubtype->setCreateUser($current_user);
        
        $form = $this->createForm(new MonsterSubTypeRegisterType, $monstersubtype);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($monstersubtype);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre sous-type a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_monstersubtype_administration_view', array('slug' => $monstersubtype->getSlug())));
                }
            }
        return $this->render('PMMonsterBundle:MonsterSubType:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:MonsterSubType');
 
        $monstersubtype = $repository->findOneBySlug($slug);

        if ($monstersubtype === null) {
          throw $this->createNotFoundException('MonsterSubType : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMMonsterBundle:MonsterSubType:view.html.twig', array(
                                'monstersubtype' => $monstersubtype,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:MonsterSubType');
 
        $monstersubtype = $repository->findOneBySlug($slug);

        if ($monstersubtype === null) {
          throw $this->createNotFoundException('MonsterSubType : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new MonsterSubTypeEditType, $monstersubtype);
        
        $current_user = $this->getUser();
        $monstersubtype->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($monstersubtype);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre sous-type a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_monstersubtype_administration_view', array('slug' => $monstersubtype->getSlug())));
                }
            }
        
        return $this->render('PMMonsterBundle:MonsterSubType:edit.html.twig', array(
                                'monstersubtype' => $monstersubtype,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:MonsterSubType');
 
        $listMonsterSubTypes = $repository->findAll();

        return $this->render('PMMonsterBundle:MonsterSubType:listMonsterSubTypes.html.twig', array(
                                'listMonsterSubTypes' => $listMonsterSubTypes,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMMonsterBundle:MonsterSubType');
        $monstersubtype = $repository->findOneBySlug($slug);
        
        if ($monstersubtype === null) {
          throw $this->createNotFoundException('MonsterSubType : [slug='.$slug.'] inexistant.');
        }
        
        $monstersubtypeAction = $this->container->get('pm_monster.monstersubtypeaction');
        $monstersubtypeAction->deleteMonsterSubType($monstersubtype);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre sous-type a bien été supprimé.' );
        return $this->forward('PMMonsterBundle:MonsterSubType:list');
    }
}
