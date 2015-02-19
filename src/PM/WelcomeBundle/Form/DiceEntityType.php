<?php

namespace PM\WelcomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DiceEntityType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('diceNumber',     'integer',      array(  'required' => true))
            ->add('diceType',       'entity',       array(  'class' => 'PMWelcomeBundle:DiceType',
                                                            'property'    => 'name',
                                                            'required' => true,
                                                            'empty_value' => 'Dés'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\WelcomeBundle\Entity\DiceEntity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_welcomebundle_diceentity';
    }
}
