<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RaceRegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',               'text',     array('required' => true))
            ->add('description',        'textarea', array('required' => false))
            ->add('size',               'integer',  array('required' => false))
            ->add('speed',              'number',   array('required' => false, 'precision' => '1'))
            ->add('skillModifier',      'integer',  array('required' => false))
            ->add('predilectionClass',  'entity',   array('class' => 'PMCharacterBundle:ClassDnD',
                                                          'property'    => 'name',
                                                          'required' => false,
                                                          'empty_value' => 'Classes de Prédilection',
                                                          'empty_data'  => null))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\CharacterBundle\Entity\Race'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_characterbundle_race_register';
    }
}
