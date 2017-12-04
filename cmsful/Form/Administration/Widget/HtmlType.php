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
use CMS\Form\Administration\Widget\WidgetType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
/**
 * HtmlType
 */
class HtmlType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('content', TextareaType::class, ['label' => 'Content:', 'label_attr' => ['class' => 'col-md-3'], 'attr' => ['class' => 'form-control col-md-9']]);
        
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class'        => Widget::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'widget_form',
        ]);
    }
	public function getParent() {
		return WidgetType::class;
	}
}
