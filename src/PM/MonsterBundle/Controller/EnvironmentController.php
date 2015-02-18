<?php

namespace PM\MonsterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\MonsterBundle\Entity\Environment;
use PM\MonsterBundle\Form\EnvironmentRegisterType;
use PM\MonsterBundle\Form\EnvironmentEditType;

class EnvironmentController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMMonsterBundle:Environment:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $environment = new Environment;
        $environment->setCreateUser($current_user);
        
        $form = $this->createForm(new EnvironmentRegisterType, $environment);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($environment);
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, l\'environnement a bien été créé.' );
                    return $this->redirect($this->generateUrl('pm_environment_administration_view', array('slug' => $environment->getSlug())));
                }
            }
        return $this->render('PMMonsterBundle:Environment:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:Environment');
 
        $environment = $repository->findOneBySlug($slug);

        if ($environment === null) {
          throw $this->createNotFoundException('Environment : [slug='.$slug.'] inexistant.');
        }
        
        return $this->render('PMMonsterBundle:Environment:view.html.twig', array(
                                'environment' => $environment,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:Environment');
 
        $environment = $repository->findOneBySlug($slug);

        if ($environment === null) {
          throw $this->createNotFoundException('Environment : [slug='.$slug.'] inexistant.');
        }
        
        $form = $this->createForm(new EnvironmentEditType, $environment);
        
        $current_user = $this->getUser();
        $environment->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($environment);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre environnement a bien été édité.' );
                    return $this->redirect($this->generateUrl('pm_environment_administration_view', array('slug' => $environment->getSlug())));
                }
            }
        
        return $this->render('PMMonsterBundle:Environment:edit.html.twig', array(
                                'environment' => $environment,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMMonsterBundle:Environment');
 
        $listEnvironments = $repository->findAll();

        return $this->render('PMMonsterBundle:Environment:listEnvironments.html.twig', array(
                                'listEnvironments' => $listEnvironments,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMMonsterBundle:Environment');
        $environment = $repository->findOneBySlug($slug);
        
        if ($environment === null) {
          throw $this->createNotFoundException('Environment : [slug='.$slug.'] inexistant.');
        }
        
        $environmentAction = $this->container->get('pm_monster.environmentaction');
        $environmentAction->deleteEnvironment($environment);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre environement a bien été supprimé.' );
        return $this->forward('PMMonsterBundle:Environment:list');
    }
}
