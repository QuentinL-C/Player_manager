<?php

namespace PM\WeaponBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WeaponRegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',           'text',     array(  'required' => true))
            ->add('description',    'textarea', array(  'required' => false))
            ->add('weaponType',     'entity',   array(  'class' => 'PMWeaponBundle:WeaponType',
                                                        'property' => 'name',
                                                        'required' => true,
                                                        'empty_value' => 'Type d\'Arme',))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\WeaponBundle\Entity\Weapon'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_weaponbundle_weapon_register';
    }
}
