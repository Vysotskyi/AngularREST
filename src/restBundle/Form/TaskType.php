<?php

namespace restBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class TaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('date', DateTimeType::class, array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'format' => "yyyy-MM-dd'T'HH:mm:ss.SSSZ"
            ))
            ->add('status')
            ->add('father')
            ->add('project_id')
            ->add('ord')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'restBundle\Entity\Task',
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ));
    }
    public function getName()
    {
        return 'task';
    }
}
