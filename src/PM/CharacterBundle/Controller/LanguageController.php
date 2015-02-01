<?php

namespace PM\CharacterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PM\CharacterBundle\Entity\Language;
use PM\CharacterBundle\Form\LanguageRegisterType;
use PM\CharacterBundle\Form\LanguageEditType;

class LanguageController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMCharacterBundle:Language:index.html.twig');
    }
    
    public function registerAction()
    {
        $current_user = $this->getUser();
        $language = new Language;
        $language->setCreateUser($current_user);
        
        $form = $this->createForm(new LanguageRegisterType, $language);
 
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($language);
                    
                    $em->flush();
                    
                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, la langue a bien été créée.' );
           
                    return $this->redirect($this->generateUrl('pm_language_administration_view', array('slug' => $language->getSlug())));
                }
            }
        return $this->render('PMCharacterBundle:language:register.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function viewAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Language');
 
        $language = $repository->findOneBySlug($slug);

        if ($language === null) {
          throw $this->createNotFoundException('Langue : [slug='.$slug.'] inexistante.');
        }
        
        return $this->render('PMCharacterBundle:Language:view.html.twig', array(
                                'language' => $language,
                            ));
    }
    
    public function editAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('PMCharacterBundle:Language');
 
        $language = $repository->findOneBySlug($slug);

        if ($language === null) {
          throw $this->createNotFoundException('Langue : [slug='.$slug.'] inexistante.');
        }
        
        $form = $this->createForm(new LanguageEditType, $language);
        
        $current_user = $this->getUser();
        $language->setUpdateUser($current_user);
        
        $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                
                if ($form->isValid()) {
                    $em->persist($language);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('notice', 'Félicitations, votre langue a bien été éditée.' );
                    return $this->redirect($this->generateUrl('pm_language_administration_view', array('slug' => $language->getSlug())));
                }
            }
        
        return $this->render('PMCharacterBundle:Language:edit.html.twig', array(
                                'language' => $language,
                                'form' => $form->createView(),
                            ));
    }
    
    public function listAction()
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Language');
 
        $listLanguages = $repository->findAll();

        return $this->render('PMCharacterBundle:Language:listLanguages.html.twig', array(
                                'listLanguages' => $listLanguages,
                            ));
    }
    
    public function deleteAction($slug)
    {
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('PMCharacterBundle:Language');
        $language = $repository->findOneBySlug($slug);
        
        if ($language === null) {
          throw $this->createNotFoundException('Langue : [slug='.$slug.'] inexistante.');
        }
        
        $deleteLanguage = $this->container->get('pm_character.deletelanguage');
        $deleteLanguage->deleteLanguage($language);
             
        $this->get('session')->getFlashBag()->add('notice', 'Votre langue a bien été supprimée.' );
        return $this->forward('PMCharacterBundle:Language:list');
    }
}
