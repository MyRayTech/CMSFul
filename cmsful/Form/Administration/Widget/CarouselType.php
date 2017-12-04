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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

/**
 * CarouselType
 */
class CarouselType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class, ['label' => 'widget.name:', 'attr' => ['class' => 'form-control']])
                ->add('identifier', TextType::class, ['label' => 'widget.id:', 'attr' => ['class' => 'form-control']])
                ->add('mode', ChoiceType::class, [
                    'label'   => 'sliderEffect',
                    'empty_data' => 'fade',
                    'choices' => [
                        'Horizontal' => 'horizontal',
                        'Vertical'   => 'vertical',
                        'Fade'       => 'fade'
					],
					'attr' => [
						'class' => 'form-control',
						'placeholder' => 'slider.effect'
				]])
                ->add('minSlides', IntegerType::class, [
                    'label' => 'minSlides',
                    'empty_data' => 1,
                    'attr'  => [
						'min' => 1,
						'class' => 'form-control'
					]
                ])
                ->add('maxSlides', IntegerType::class, [
                    'label' => 'maxSlides',
                    'empty_data' => 1,
                    'attr'  => [
						'min' => 1,
						'class' => 'form-control'
					]
                ])
                ->add('speed', IntegerType::class, [
                    'label' => 'animationSpeed',
                    'empty_data' => 800,
                    'attr' => [
						'min' => 500,
						'max' => 300000
						]
                ])
                ->add('pause', IntegerType::class, [
                    'label' => 'sliderAnimationDuration',
                    'empty_data' => 5000,
                    'attr' => [
						'min' => 500,
						'max' => 30000
					]
                ])
                ->add('autoStart', ChoiceType::class, [
                    'label' => 'autoScroll',
                    'empty_data' => true,
                    'choices'   => [
                        'Yes' => true,
                        'No' => false
                    ],
					'attr' => [
						'class' => 'form-control'
					]
                ])
                ->add('slide1', SlideType::class);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'widget_carousel_form',
        ]);
    }
    
    public function getParent() {
        return WidgetType::class;
    }

}
