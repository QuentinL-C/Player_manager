<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Skill;
use PM\CharacterBundle\Form\SkillRegisterType;
use PM\CharacterBundle\Form\SkillEditType;
use PM\CharacterBundle\Entity\CharacterSkill;

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
                    // -- On crée un CharacterSkill pour chaque Personnage
                    $repositorySkill = $em->getRepository('PMCharacterBundle:CharacterUsed');
                    $characterUseds = $repositorySkill->findAll();
                    foreach ($characterUseds as $characterUsed) {
                        $characterSkill = new CharacterSkill;
                        $characterSkill->setCreateUser($current_user);
                        $characterSkill->setCharacterUsed($characterUsed);
                        $characterSkill->setSkill($skill);
                        $characterSkill->setRanks(0);
                        $em->persist($characterSkill);
                    }
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
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $skill = $repository->findOneBySlug($slug);

        if ($skill === null) {
          throw $this->createNotFoundException('Compétence : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:Skill:view.html.twig', array(
                                'skill' => $skill,
                            ));
    }
    
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Skill');
 
        $skill = $repository->findOneBySlug($slug);

        if ($skill === null) {
          throw $this->createNotFoundException('Compétence : [slug='.$slug.'] inexistante.');
        }
        
        $form = $this->createForm(new SkillEditType, $skill);
        
        $current_user = $this->getUser();
        $skill->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
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
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $listSkills = $repository->findAll();

        return $this->render('PMCharacterBundle:Skill:listSkills.html.twig', array(
                                'listSkills' => $listSkills,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
        $skill = $repository->findOneBySlug($slug);
        
        if ($skill === null) {
          throw $this->createNotFoundException('Compétence : [slug='.$slug.'] inexistante.');
        }
        
        $deleteSkill = $this->container->get('pm_character.deleteskill');
        $deleteSkill->deleteSkill($skill);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre compétence a bien été supprimée.' );
        return $this->forward('PMCharacterBundle:Skill:list');
    }
}
