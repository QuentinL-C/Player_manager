<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RaceEditType extends RaceRegisterType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder
            ->remove('strength')
            ->remove('dexterity')
            ->remove('constitution')
            ->remove('intelligence')
            ->remove('wisdom')
            ->remove('charisma')
            ->add('abilities',     'collection',   array(  'type' => new RaceAbilityType(),
                                                        'allow_add'    => false,
                                                        'allow_delete' => false))
            ->add('updateComment',    'text',   array('required' => false))
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
        return 'pm_characterbundle_race_edit';
    }
}
