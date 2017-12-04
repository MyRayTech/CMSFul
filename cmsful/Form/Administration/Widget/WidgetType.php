<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Form\Administration\Widget;

use CMS\Entity\Widget;
use CMS\Form\Administration\TopFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * WidgetType
 */
class WidgetType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('name', TextType::class, ['label' => 'widget.name', 'label_attr' =>['class' => 'col-md-3 form-control-label'], 'attr' => ['class' => 'form-control']]);
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->resolve([
            'data_class' => Widget::class,
        ]);
    }
	public function getParent() {
		return TopFormType::class;
	}

}
