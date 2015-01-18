<?php

namespace PM\UserBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;


class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {
        //----------------------------------------------------------------------
        // -- Définition des variables :
        //----------------------------------------------------------------------
        $nbUtilisateurs = $this->container->get('Doctrine')->getManager()
                               ->getRepository('PMUserBundle:User')
                               ->findAll();
        $current_user = $this->getUser();
        //----------------------------------------------------------------------

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
    
        $user = $userManager->createUser();
        $user->setEnabled(true);
    
        $event = new GetResponseUserEvent($user, $request);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        
        //----------------------------------------------------------------------
        // -- Création de l'identifiant provisoire :
        //----------------------------------------------------------------------
        $user->setUsername('Username');
        //----------------------------------------------------------------------
        
        $form = $formFactory->createForm();
        $form->setData($user);
    
        if ('POST' === $request->getMethod()) {
            $form->bind($request);
    
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
    
                //------------------------------------------------------------------
                // -- Other functionalities -- PAS EVIDENT QUE CA MARCHE çA ...
                //------------------------------------------------------------------
                if(NULL !== $current_user AND $nbUtilisateurs > 0) { $user->setCreateUser($current_user); }
                elseif(NULL === $current_user AND $nbUtilisateurs == 0) { $user->setCreateUser($user);}
                
                $user->setUsername($user->getEmail());
                //------------------------------------------------------------------

                $userManager->updateUser($user);
                
                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }
                
                return $response;
            }
        }
    
        return $this->render('PMUserBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}