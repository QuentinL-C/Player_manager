<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Level;
use PM\CharacterBundle\Form\LevelRegisterType;
use PM\CharacterBundle\Form\LevelEditType;

class LevelController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Level:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $level = new Level;
        $level->setCreateUser($current_user);
        
        $form = $this->createForm(new LevelRegisterType, $level);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($level);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre niveau a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_level_administration_view', array('level' => $level->getLevel())));
                }
            }
        return $this->render('PMCharacterBundle:level:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($level)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Level');
 
        $levelObject = $repository->findOneByLevel($level);
        
        if ($levelObject === null) {
          throw $this->createNotFoundException('Niveau : [slug='.$level.'] inexistant.');
        }
        
        return $this->render('PMCharacterBundle:Level:view.html.twig', array(
                                'level' => $levelObject,
                            ));
    }
    
    public function editAction($level)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Level');
 
        $levelObject = $repository->findOneByLevel($level);
        
        if ($levelObject === null) {
          throw $this->createNotFoundException('Niveau : [slug='.$level.'] inexistant.');
        }
        
        $form = $this->createForm(new LevelEditType, $levelObject);
        
        $current_user = $this->getUser();
        $levelObject->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($levelObject);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre niveau a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_level_administration_view', array('level' => $levelObject->getLevel())));
                }
            }
        
        return $this->render('PMCharacterBundle:Level:edit.html.twig', array(
                                'level' => $levelObject,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Level');
 
        $listLevels = $repository->findAll();

        return $this->render('PMCharacterBundle:Level:listLevels.html.twig', array(
                                'listLevels' => $listLevels,
                            ));
    }
    
    public function deleteAction($level)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Level');
        $levelObject = $repository->findOneByLevel($level);
        
        if ($levelObject === null) {
          throw $this->createNotFoundException('Niveau : [slug='.$level.'] inexistant.');
        }
        
        $deleteLevel = $this->container->get('pm_character.deletelevel');
        $deleteLevel->deleteLevel($levelObject);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre niveau a bien été supprimé.' );
        return $this->forward('PMCharacterBundle:Level:list');
    }
}
