<?php

namespace PM\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
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
            ->add('name',               'text',         array(  'required' => true))
            ->add('firstname',          'text',         array(  'required' => true))
        ;
    }
    
    public function getName()
    {
        return 'pm_user_registration';
    }
}
