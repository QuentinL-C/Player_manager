<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Skill;
use PM\CharacterBundle\Form\SkillRegisterType;
use PM\CharacterBundle\Form\SkillEditType;

class SkillController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Skill:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $skill = new Skill;
        $skill->setCreateUser($current_user);
        
        $form = $this->createForm(new SkillRegisterType, $skill);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($skill);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la compétence a bien été créée.' );
           
                    return $this->redirect($this->generateUrl('pm_skill_administration_view', array('slug' => $skill->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:Skill:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $skill = $repository->findOneBySlug($slug);

        return $this->render('PMCharacterBundle:Skill:view.html.twig', array(
                                'skill' => $skill,
                            ));
    }
    
    public function editAction($slug)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $skill = $repository->findOneBySlug($slug);

        $form = $this->createForm(new SkillEditType, $skill);
        
        $current_user = $this->getUser();
        $skill->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($skill);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la compétence a bien été éditée.' );
           
                    return $this->redirect($this->generateUrl('pm_skill_administration_view', array('slug' => $skill->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Skill:edit.html.twig', array(
                                'skill' => $skill,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $listSkills = $repository->findAll();

        return $this->render('PMCharacterBundle:Skill:listSkills.html.twig', array(
                                'listSkills' => $listSkills,
                            ));
    }
}
