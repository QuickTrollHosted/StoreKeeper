<?php

namespace Storekeeper\InventoryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isChildIndivisible', null, array('required' => false))
            ->add('barcode')
            ->add('name')
            ->add('description', null, array('required' => false))
            ->add('hasPicture', null, array('required' => false))
            ->add('category', null, array('empty_value' => 'Choose a category'))
            ->add('warehouse', null, array('empty_value' => 'Choose a warehouse'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Storekeeper\InventoryBundle\Entity\Part'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'storekeeper_inventorybundle_part';
    }
}
