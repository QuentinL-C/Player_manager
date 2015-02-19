<?php

namespace PM\MonsterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PM\WelcomeBundle\Form\DiceFormType;

class MonsterRegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',               'text',     array(  'required' => true))
            ->add('description',        'textarea', array(  'required' => false))
            ->add('socialOrganisation', 'textarea', array(  'required' => false))
            ->add('powerfullFactor',    'integer',  array(  'required' => true))
            ->add('initiative',         'integer',  array(  'required' => true))
            ->add('hpForm',              new DiceFormType())
            ->add('hpAverage',          'integer',  array(  'required' => true))
            ->add('bab',                'integer',  array(  'required' => true))
            ->add('grappleModifier',    'integer',  array(  'required' => true))
            ->add('ac',                 'integer',  array(  'required' => true))
            ->add('touchAC',            'integer',  array(  'required' => true))
            ->add('ffAC',               'integer',  array(  'required' => true))
            ->add('speed',              'number',   array(  'required' => true, 'precision' => '1'))
            ->add('spaceOccupied',      'number',   array(  'required' => true, 'precision' => '1'))
            ->add('areaLying',          'number',   array(  'required' => true, 'precision' => '1'))
            ->add('alignment',          'entity',   array(  'class' => 'PMCharacterBundle:Alignment',
                                                            'property' => 'name',
                                                            'required' => false,
                                                            'empty_value' => 'Choisissez un alignement',
                                                            'empty_data'  => null))
            ->add('environment',        'entity',   array(  'class' => 'PMMonsterBundle:Environment',
                                                            'property' => 'name',
                                                            'required' => false,
                                                            'empty_value' => 'Choisissez un environnement',
                                                            'empty_data'  => null))
            ->add('languages',          'entity',   array(  'class' => 'PMCharacterBundle:Language',
                                                            'property'    => 'name',
                                                            'expanded' => false,
                                                            'multiple' => true,
                                                            'required' => false,
                                                            'empty_value' => 'Langues',
                                                            'empty_data'  => null))
            ->add('gifts',              'entity',   array(  'class' => 'PMGiftBundle:Gift',
                                                            'property'    => 'name',
                                                            'expanded' => false,
                                                            'multiple' => true,
                                                            'required' => false,
                                                            'empty_value' => 'Dons',
                                                            'empty_data'  => null))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\MonsterBundle\Entity\Monster'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_monsterbundle_monster_register';
    }
}
