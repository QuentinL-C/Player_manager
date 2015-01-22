<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CharacterUsedRegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user',       'entity',   array('class' => 'PMUserBundle:User',
                                                  'property' => 'username',
                                                  'required' => true,
                                                  'empty_value' => 'Choisissez un propriétaire',))
                
            ->add('name',       'text',     array('required' => true,
                                                  'max_length' => 45))
            ->add('level',      'integer',  array('required' => true))
            ->add('story',      'textarea', array('required' => false,
                                                  'max_length' => 10000))
            ->add('age',        'integer',  array('required' => false))
            ->add('gender',     'choice',   array('choices'   => array('Homme' => 'Homme', 'Femme' => 'Femme'),
                                                  'required'  => false,
                                                  'empty_value' => 'Choisissez une option',
                                                  'empty_data'  => null))
            ->add('height',     'integer',  array('required' => false,
                                                  'precision' => 2))
            ->add('weight',     'integer',  array('required' => false,
                                                  'precision' => 2))
            ->add('alignment',  'entity',   array('class' => 'PMCharacterBundle:Alignment',
                                                  'property' => 'name',
                                                  'required' => false,
                                                  'empty_value' => 'Choisissez un alignement',
                                                  'empty_data'  => null))
            ->add('classDnD',   'entity',   array('class' => 'PMCharacterBundle:ClassDnD',
                                                  'property' => 'name',
                                                  'required' => true,
                                                  'empty_value' => 'Choisissez une classe',))
            ->add('race',       'entity',   array('class' => 'PMCharacterBundle:Race',
                                                  'property' => 'name',
                                                  'required' => true,
                                                  'empty_value' => 'Choisissez une race',))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\CharacterBundle\Entity\CharacterUsed'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_characterbundle_characterused_register';
    }
}
