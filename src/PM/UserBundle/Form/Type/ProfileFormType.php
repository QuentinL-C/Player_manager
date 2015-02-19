<?php

namespace PM\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder
            // -- Champs Utilisateur :
            ->add('name',               'text',         array('required' => true))
            ->add('firstname',          'text',         array('required' => true))
            ->add('roles',              'collection',   array(  'type' => 'choice',
                                                                'options' => array( 
                                                                    'label' => false,
                                                                    'choices' => array(
                                                                            'ROLE_ADMIN' => 'Admin',
                                                                            'ROLE_USER' => 'Utilisateur'))))
        ;
    }
    
    public function getName()
    {
        return 'pm_user_profile';
    }
}
