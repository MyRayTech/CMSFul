<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use CMS\Entity\Widget;
use CMS\Form\Administration\Widget as FormTypes;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Description of WidgetController
 *
 * @author Reaper
 */
class WidgetController extends Controller implements AdminControllerInterface
{

    public function addAction(Request $request) {

        $form = $this->createForm(FormTypes\HtmlType::class)
                ->add('save', SubmitType::class, ['label' => 'widget.add','attr' => ['class' => 'btn btn-primary']]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data   = $form->getData();
            $widget = new Widget();
            $widget->setName($data['name']);
            $widget->setcode($data['content']);

            $em = $this->getDoctrine()->getManager();

            $em->persist($widget);

            $em->flush();

            return $this->redirectToRoute('admin_widget_add');
        }
        return new Response($this->renderView('@styles/backend/widget/add_edit_form.html.twig', [
                    'form'       => $form->createView(),
                    'sub_header' => 'widget.add',
                    'title'      => 'widgets',
                    'active'     => 'content',
                    'sub_menu'   => 'widget.add',
                    'sub_active' => 'widget',
        ]));
    }

    public function deleteAction(Request $request) {
        $widget = $this->getDoctrine()
                ->getRepository('CMS:Widget')
                ->find($request->get('id'));
        $em     = $this->getDoctrine()->getManager();

        $em->remove($widget);
        $em->flush();

        return $this->redirectToRoute('admin_widget_manage');
    }

    public function editAction(Request $request) {
        $widget = $this->getDoctrine()
                ->getRepository('CMS:Widget')
                ->find($request->get('id'));

        foreach ((array) $widget as $field => $value) {
            if (preg_match('/\\x00.*\\x00/', $field)) {
                $clean_name = preg_replace('/\\x00.*\\x00/', '', $field);
            }
            $data_array[$clean_name] = $value;
        }

        $code         = json_decode($data_array['code'], true);
        unset($data_array['code']);
        $merged_array = array_merge($data_array, $code);
        $type         = $this->formType($merged_array['type']);

        $form = $this->createForm($type, $merged_array)
                ->add('save', SubmitType::class, ['label' => 'Save Widget']);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $widget->setName($data['name']);
            unset($data['name']);
            unset($data['id']);
            unset($data['type']);
            $widget->setcode(json_encode($data));

            $em = $this->getDoctrine()->getManager();
            $em->persist($widget);
            $em->flush();

            return $this->redirectToRoute('admin_widget_add');
        }
        return new Response($this->renderView('@styles/backend/widget/add_edit_form.html.twig', [
                    'form'       => $form->createView(),
                    'sub_header' => 'create widget',
                    'title'      => 'widgets',
                    'active'     => 'content',
                    'sub_active' => 'widget',
                    'sub_menu'   => 'widget.add'
        ]));
    }

    public function indexAction() {
        $translator = $this->get('translator');

        $widgets = $this->getDoctrine()
                ->getRepository('CMS:Widget')
                ->findAll();

        return new Response($this->renderView('@styles/backend/widget/index.html.twig', [
                    'widgets'    => $widgets,
                    'title'      => $translator->trans('widgets'),
                    'active'     => 'content',
                    'sub_active' => 'widget',
                    'sub_menu'   => 'widget.list'
        ]));
    }

    public function formType($type) {
        $types = [
            FormTypes\HtmlType::class,
            FormTypes\CarouselType::class,
            FormTypes\ImageType::class,
            FormTypes\NewsType::class,
            FormTypes\BlogType::class,
        ];
        return $types[(int) $type];
    }

}
