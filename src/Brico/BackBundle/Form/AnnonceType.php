<?php

namespace Brico\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('image')
            ->add('marque')
            ->add('ville')
            ->add('publique')
            ->add('type_annonce', 'entity', array( 'class' => "BricoBackBundle:TypeAnnonce", 'property' => "description", 'multiple' => false, 'expanded' => true ))
            ->add('categories', 'entity', array( 'class' => "BricoBackBundle:Categorie", 'property' => "description", 'multiple' => true, 'expanded' => true ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Brico\BackBundle\Entity\Annonce'
        ));
    }
}
