<?php

namespace sas\galleryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*->add('category')*/
            ->add('category', 'entity', array(
                'class' => 'galleryBundle:Category',
                /*'empty_value' => 'Choisissez une option',*/
                'property' => 'name',
                'data' => 'id',
            ))
            ->add('year')
            ->add('expo1')
            ->add('link1')
            ->add('url1')
            ->add('expo2')
            ->add('link2')
            ->add('url2')
            ->add('expo3')
            ->add('link3')
            ->add('url3')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sas\galleryBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sas_gallerybundle_event';
    }
}
