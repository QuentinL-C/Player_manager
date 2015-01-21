<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\CharacterUsed;
use PM\CharacterBundle\Entity\CharacterWealth;
use PM\CharacterBundle\Form\CharacterUsedRegisterType;
use PM\CharacterBundle\Form\CharacterUsedEditType;

class CharacterUsedController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:CharacterUsed:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        
        $characterWealth = new CharacterWealth;
        $characterWealth->setCreateUser($current_user);
        $characterWealth->setPo(0);
        $characterWealth->setPa(0);
        $characterWealth->setPc(0);
        
        $characterUsed = new CharacterUsed;
        $characterUsed->setCreateUser($current_user);
        $characterUsed->setHpCurrent(0);
        $characterUsed->setHpMax(0);
        $characterUsed->setWealth($characterWealth);
        
        $form = $this->createForm(new CharacterUsedRegisterType, $characterUsed);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($characterUsed);
                    $em->persist($characterWealth);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, le personnage a bien été créé.' );
           
                    return $this->redirect($this->generateUrl('pm_characterused_view', array('slug' => $characterUsed->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:CharacterUsed:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $characterUsed = $repository->findOneBySlug($slug);

        return $this->render('PMCharacterBundle:CharacterUsed:view.html.twig', array(
                                'characterUsed' => $characterUsed,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $characterUsed = $repository->findOneBySlug($slug);

        $form = $this->createForm(new CharacterUsedEditType, $characterUsed);
        
        $current_user = $this->getUser();
        $characterUsed->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($characterUsed);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre personnage a bien été édité.' );
           
                    return $this->redirect($this->generateUrl('pm_characterused_view', array('slug' => $characterUsed->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:CharacterUsed:edit.html.twig', array(
                                'characterUsed' => $characterUsed,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:CharacterUsed');
 
        $listCharactersUsed = $repository->findAll();

        return $this->render('PMCharacterBundle:CharacterUsed:listCharactersUsed.html.twig', array(
                                'listCharactersUsed' => $listCharactersUsed,
                            ));
    }
}
