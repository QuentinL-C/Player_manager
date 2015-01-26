<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassBABType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lvl',        'integer',  array('required' => true))
            ->add('attackNb',   'integer',  array('required' => true))
            ->add('value',      'integer',  array('required' => true))
            ->add('classDnD',   'entity',   array('class' => 'PMCharacterBundle:ClassDnD',
                                                  'property' => 'name',
                                                  'required' => true,
                                                  'empty_value' => 'Choisissez une classe',))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\CharacterBundle\Entity\ClassBAB'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_characterbundle_classbab';
    }
}
