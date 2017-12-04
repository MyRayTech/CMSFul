<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use CMS\Entity\Comment;

/**
 * CommentType
 */
class CommentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder->add('text', TextareaType::class, ['label' => 'comment']);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->resolve([
            'data_class'    => Comment::class
        ]);
    }

}
