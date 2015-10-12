<?php

namespace sas\galleryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkType extends AbstractType
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
            /*->add('subCategory')*/
            ->add('subCategory', 'entity', array(
                'class' => 'galleryBundle:SubCategory',
                /*'empty_value' => 'Choisissez une option',*/
                'property' => 'name',
                'data' => 'id',
            ))
            /*->add('img')*/
            ->add('img', 'entity', array(
                'class' => 'galleryBundle:Document',
                /*'empty_value' => 'Choisissez une image',*/
                'property' => 'path',
            ))
            ->add('title')
            ->add('techno')
            ->add('size')
            ->add('year')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sas\galleryBundle\Entity\Work'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sas_gallerybundle_work';
    }
}
