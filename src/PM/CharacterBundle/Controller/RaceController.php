<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Race;
use PM\CharacterBundle\Form\RaceRegisterType;
use PM\CharacterBundle\Form\RaceEditType;

class RaceController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Race:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $race = new Race;
        $race->setCreateUser($current_user);
        
        $form = $this->createForm(new RaceRegisterType, $race);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($race);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la race a bien été créée.' );
           
                    return $this->redirect($this->generateUrl('pm_race_administration_view', array('slug' => $race->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:race:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
 
        $race = $repository->findOneBySlug($slug);
        
        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }

        return $this->render('PMCharacterBundle:Race:view.html.twig', array(
                                'race' => $race,
                            ));
    }
    
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Race');
 
        $race = $repository->findOneBySlug($slug);

        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }
        
        $form = $this->createForm(new RaceEditType, $race);
        
        $current_user = $this->getUser();
        $race->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($race);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre race a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_race_administration_view', array('slug' => $race->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Race:edit.html.twig', array(
                                'race' => $race,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
 
        $listRaces = $repository->findAll();

        return $this->render('PMCharacterBundle:Race:listRaces.html.twig', array(
                                'listRaces' => $listRaces,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Race');
        $race = $repository->findOneBySlug($slug);
        
        if ($race === null) {
          throw $this->createNotFoundException('Race : [slug='.$slug.'] inexistante.');
        }
        
        $deleteRace = $this->container->get('pm_character.deleterace');
        $deleteRace->deleteRace($race);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre race a bien été supprimée.' );
        return $this->forward('PMCharacterBundle:Race:list');
    }
}
