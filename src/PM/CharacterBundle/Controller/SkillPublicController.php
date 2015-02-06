<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SkillPublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:SkillPublic:index.html.twig');
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $skill = $repository->findOneBySlug($slug);

        if ($skill === null) {
          throw $this->createNotFoundException('Compétence : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:SkillPublic:view.html.twig', array(
                                'skill' => $skill,
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Skill');
 
        $listSkills = $repository->findAll();

        return $this->render('PMCharacterBundle:SkillPublic:listSkills.html.twig', array(
                                'listSkills' => $listSkills,
                            ));
    }
}
