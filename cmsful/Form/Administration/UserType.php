<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Form\Administration;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;

use CMS\Entity\User;

/**
 * UserType Form
 */
class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('firstName', TextType::class, ['label' => 'first.name'])
                ->add('lastName', TextType::class, ['label' => 'last.name'])
                ->add('username', TextType::class, ['label' => 'username'])
                ->add('email', EmailType::class, ['label' => 'email'])
                ->add('locale', LanguageType::class, ['label' => 'language'])
                ->add('avatar', FileType::class,['label' => 'avatar', 'data_class' => null]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->resolve([
            'data_class'        => User::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'user_form',
        ]);
    }

}
