<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassBABEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('babs', 'collection', array('type' => new ClassBABType(),
                                                    'allow_add'    => true,
                                                    'allow_delete' => true

      ))
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
        return 'pm_characterbundle_classBAB_Edit';
    }
}
