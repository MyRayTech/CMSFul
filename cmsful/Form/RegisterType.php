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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Register Type Form
 */
class RegisterType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('username', TextType::class, [
                    'label'    => 'username',
                    'required' => true
                ])
                ->add('email', RepeatedType::class, [
                    'type'           => EmailType::class,
                    'required'       => true,
                    'first_options'  => ['label' => 'email'],
                    'second_options' => ['label' => 'repeat.email']
                ])
                ->add('password', RepeatedType::class, [
                    'type'           => PasswordType::class,
                    'required'       => true,
                    'first_options'  => ['label' => 'password'],
                    'second_options' => ['label' => 'repeat.pass']
                ])
                ->add('save', SubmitType::class, ['label' => 'register']);
    }

    public function configureOptions(OptionsResolver $resolver) {
        
    }

}
