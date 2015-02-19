<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassDnDInstanceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('classDnD',   'entity',   array(  'class' => 'PMCharacterBundle:ClassDnD',
                                                    'property' => 'name',
                                                    'required' => true,
                                                    'empty_value' => 'Choisissez une classe',))
            ->add('level',      'entity',   array(  'class' => 'PMCharacterBundle:Level',
                                                    'property' => 'level',
                                                    'required' => true,
                                                    'empty_value' => 'Niveau',))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\CharacterBundle\Entity\ClassDnDInstance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_characterbundle_classdndinstance';
    }
}
