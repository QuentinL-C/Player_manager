<?php

namespace PM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    
    public function viewAction($id_user)
    {
        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('PMUserBundle:User');
 
        $user = $repository->find($id_user);
        
        return $this->render('PMUserBundle:User:view.html.twig', array(
                             'user' => $user
                            ));
    }
}
