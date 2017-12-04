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
use CMS\Entity\Navigation;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

/**
 * NavigationType
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class NavigationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class)
                ->add('url', TextType::class, ['required' => false])
                ->add('parent', EntityType::class, ['class' => 'CMS:Navigation', 'choice_label' => 'name', 'empty_data' => 0 ])
                ->add('weight', IntegerType::class, ['attr' => ['min' => '0']]);
        
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();
            $config = $form->get('parent')->getConfig();
            $options = $config->getOptions();
            dump(get_class($config->getType()->getInnerType()));
        });
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->resolve([
            'data_class' => Navigation::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'navigation_form',
        ]);
    }

}
