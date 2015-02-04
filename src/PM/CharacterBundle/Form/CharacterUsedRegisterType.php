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
            ->add('user',               'entity',   array(  'class' => 'PMUserBundle:User',
                                                            'property' => 'username',
                                                            'required' => true,
                                                            'empty_value' => 'Choisissez un propriétaire',))
                
            ->add('name',               'text',     array(  'required' => true,
                                                            'max_length' => 45))
            ->add('story',              'textarea', array(  'required' => false,
                                                            'max_length' => 10000))
            ->add('age',                'integer',  array(  'required' => false))
            ->add('gender',             'choice',   array(  'choices'   => array('Homme' => 'Homme', 'Femme' => 'Femme'),
                                                            'required'  => false,
                                                            'empty_value' => 'Choisissez une option',
                                                            'empty_data'  => null))
            ->add('height',             'integer',  array(  'required' => false,
                                                            'precision' => 2))
            ->add('weight',             'integer',  array(  'required' => false,
                                                            'precision' => 2))
            ->add('alignment',          'entity',   array(  'class' => 'PMCharacterBundle:Alignment',
                                                            'property' => 'name',
                                                            'required' => false,
                                                            'empty_value' => 'Choisissez un alignement',
                                                            'empty_data'  => null))
            ->add('classDnDInstances',  'collection',array( 'type' => new ClassDnDInstanceType(),
                                                            'allow_add'    => true,
                                                            'allow_delete' => true))
            ->add('race',               'entity',   array(  'class' => 'PMCharacterBundle:Race',
                                                            'property' => 'name',
                                                            'required' => true,
                                                            'empty_value' => 'Choisissez une race',))
            ->add('languages',          'entity',   array(  'class' => 'PMCharacterBundle:Language',
                                                            'property'    => 'name',
                                                            'expanded' => false,
                                                            'multiple' => true,
                                                            'required' => false,
                                                            'empty_value' => 'Langues',
                                                            'empty_data'  => null))
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
