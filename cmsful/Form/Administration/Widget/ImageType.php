<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Form\Administration\Widget;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * ImageType
 */
class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder->add('url', TextType::class,[
           'label' => 'imageUrl'
       ])
               ->add('class', TextType::class, [
                   'label' => 'imageClass'
               ]);
    }
    public function configureOptions(OptionsResolver $resolver) {
        
    }
}
