<?php

namespace CMS\Form\Administration\Content;

use CMS\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
/**
 * ImageType
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class ImageType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder->add('filename', TextType::class, ['label' => 'file name','required' => false, 'attr' => ['class' => 'form-control']])
               ->add('file', FileType::class, ['required'  => false, 'attr' => ['class' => 'form-control']])
               ->add('thumbnail', TextType::class, ['label' => 'thumbnail', 'required' => false, 'attr' => ['class' => 'form-control']])
               ->add('description', TextType::class, ['label' => 'description', 'required' => false, 'attr' => ['class' => 'form-control']]);
   }
   
   public function configureOptions(OptionsResolver $resolver) {
       $resolver->setDefaults([
            'data_class'        => Image::class,
            'csrf_protection'   => true,
            'csrf_field_name'   => '_token',
            'csrf_token_id'     => 'image_gallery_form',
        ]);
   }
}
