<?php

namespace CMS\Controller\Administration;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use CMS\Form\Content\ImageType;
use CMS\Entity\Image;

/**
 * AdminController
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class GalleryController extends Controller implements AdminControllerInterface
{

    public function addAction(Request $request) {
        $translator = $this->get('translator');
        $image      = new Image();
        $form       = $this->createForm(ImageType::class, $image)
                ->add('save', SubmitType::class, ['label' => 'add image']);
        $config = $this->getParameter('config');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if($data->getFile() !== null) {
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
               $file = $data->getFile();

               // Generate a unique name for the file before saving it
               $fileName = md5(uniqid()).'.'.$file->guessExtension();

               $file->move($config['gallery.path'], $fileName);
               
               $image->setFilename($fileName);
            } else { 
                $image->setFilename($data->getFilename());
            }
            $image->setThumbnail($data->getThumbnail());
            $image->setDescription($data->getDescription());

            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();
            return $this->redirectToRoute('admin.gallery');
        }

        return $this->render('@styles/backend/gallery/form.html.twig', [
                    'title'      => $translator->trans('Gallery'),
                    'sub_header' => 'add image',
                    'active'     => 'gallery',
                    'sub_menu'   => 'gallery.add',
                    'sub_active' => '',
                    'form'       => $form->createView()
        ]);
    }

    public function deleteAction(Request $request) {
        $image = $this->getDoctrine()
                ->getRepository('CMS:Image')
                ->find($request->get('id'));

        if (!$image) {
            throw $this->createNotFoundException(
                    'No gallery image found using this ID ' . $request->get('id')
            );
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($image);
        $em->flush();

        return $this->redirectToRoute('admin.gallery');
    }

    public function editAction(Request $request) {
        $translator = $this->get('translator');
        $em         = $this->getDoctrine()->getManager();
        $image      = $em->getRepository('CMS:Image')->find($request->get('id'));
        $form       = $this->createForm(ImageType::class)
                ->add('save', SubmitType::class, ['label' => 'save image']);
        
        $form->setData($image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $image->setFilename($data->getFilename());
            $image->setDescription($data->getDescription());
            $image->setThumbnail($data->getThumbnail());
            
            $em->persist($image);
            $em->flush();
            return $this->redirectToRoute('admin.gallery');
        }
        return $this->render('@styles/backend/gallery/form.html.twig', [
                    'title'      => $translator->trans('Gallery'),
                    'sub_header' => 'edit image',
                    'active'     => 'gallery',
                    'sub_menu'   => 'gallery.list',
                    'sub_active' => '',
                    'form'       => $form->createView()
        ]);
    }

    public function indexAction() {
        $translator = $this->get('translator');
        $images     = $this->getDoctrine()->getManager()->getRepository('CMS:Image')->findAll();
        return $this->render('@styles/backend/gallery/index.html.twig', [
                    'title'      => $translator->trans('Gallery'),
                    'active'     => 'gallery',
                    'sub_menu'   => 'gallery.list',
                    'sub_active' => '',
                    'images'     => $images
        ]);
    }
    
    public function settingsAction(Request $request) {
        $config = $this->get('cms.config');
        $form = $this->createFormBuilder()
                ->add('title', TextType::class, ['data' => $config->get('gallery.title')])
                ->add('path', TextType::class, ['data' => $config->get('gallery.path')])
                ->add('max_per_page', IntegerType::class, ['data' => $config->get('gallery.max_per_page')])
				->add('link', TextType::class, ['data' => $config->get('gallery.link'),'label' => 'routing.link'])
				->add('save', SubmitType::class)
                ->getForm();
		
		$form->handleRequest($request);
		
		if($form->isSubmitted() && $form->isValid()) {
			$data = $form->getData();
			
			foreach($data as $key => $value) {
				$config->set('gallery.'.$key, $value);
			}
		}
        
        return $this->render('@styles/backend/gallery/settings.html.twig', [
            'title' => 'gallery.configure',
            'active' => 'gallery',
            'sub_active' => 'gallery.settings',
            'sub_menu'  => '',
            'form'  => $form->createView(),
        ]);
    }

}
