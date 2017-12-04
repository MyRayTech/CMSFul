<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Form\Administration\Content;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use CMS\Entity\Project;

/**
 * ProjectType
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class ProjectType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class, ['label' => 'name', 'attr' => ['class' => 'form-control']])
                ->add('subheader', TextType::class, ['label' => 'subheader', 'attr' => ['class' => 'form-control']])
                ->add('budget', IntegerType::class, ['label' => 'budget', 'attr' => ['class' => 'form-control']])
                ->add('date', DateType::class, ['label' => 'date', 'attr' => ['class' => 'form-control']])
                ->add('description', TextareaType::class, ['label' => 'description', 'attr' => ['class' => 'form-control']])
                ->add('file', FileType::class, ['label' => 'file', 'required' => false, 'mapped' => false, 'attr' => ['class' => 'form-control']])
                ->add('image', TextType::class, ['label' => 'image', 'required' => false, 'attr' => ['class' => 'form-control']]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->resolve([
            'data_class' => Project::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'project_form',
        ]);
    }

}
