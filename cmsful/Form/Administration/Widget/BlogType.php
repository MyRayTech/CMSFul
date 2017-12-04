<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Form\Administration\Widget;

use CMS\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * BlogType
 */
class BlogType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
       
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            //'data_class'        => Widget::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'article_form',
        ]);
    }
    public function getParent() {
        return WidgetType::class;
    }

}
