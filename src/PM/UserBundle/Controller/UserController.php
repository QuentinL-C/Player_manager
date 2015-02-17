<?php

namespace PM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PM\UserBundle\Form\UserEditType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('PMUserBundle:User:index.html.twig');
    }
    
    public function usersListAction()
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMUserBundle:User');
 
        $usersList = $repository->findAll();

        return $this->render('PMUserBundle:User:usersList.html.twig', array(
                             'usersList' => $usersList,
                            ));
    }
    
    public function viewAction($user_id)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMUserBundle:User');
 
        $user = $repository->findOneById($user_id);
        
        if ($user === null) {
          throw $this->createNotFoundException('Utilisateur : [slug='.$user_id.'] inexistant.');
        }
        
        return $this->render('PMUserBundle:User:view.html.twig', array(
                             'user' => $user
                            ));
    }
    
    public function editAction($user_id, Request $request)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMUserBundle:User');
 
        $user = $repository->findOneById($user_id);
        
        if ($user === null) {
          throw $this->createNotFoundException('Utilisateur : [slug='.$user_id.'] inexistant.');
        }
        
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
