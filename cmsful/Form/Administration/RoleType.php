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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use CMS\Entity\Role;
/**
 * RoleType
 */
class RoleType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('roles', EntityType::class,[
                        'class' => 'CMS:Role',
                        'choice_label' => 'name',
                        'multiple'  => true,
                    
                ]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->resolve([
            'data_class' => Role::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'role_form',
        ]);
    }

}
