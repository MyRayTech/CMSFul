<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2016, RayTechLLC
 * @license Commercial
 */
namespace CMS\Controller\Administration;

use CMS\Entity\Page;
use CMS\Form\Administration\Content\PageType;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ContentController extends Controller implements AdminControllerInterface
{

	public function indexAction() {
		$acl = $this->get('cms.acl');
		if (!$acl->granted('admin.content.list')) {
			throw new AccessDeniedException('You do not have the required permission for this page.');
		}
		$content = $this->getDoctrine()
				->getRepository('CMS:Page')
				->findAll();

		return new Response($this->renderView('@styles/backend/content/index.html.twig', [
					'pages'		 => $content,
					'title'		 => 'content',
					'active'	 => 'content',
					'sub_active' => 'page',
					'sub_menu'	 => 'page.list'
		]));
	}

	public function addAction(Request $request) {
		$content = new Page();
		$user	 = $this->getUser();
		$form	 = $this->createForm(PageType::class)
				->add('save', SubmitType::class, ['label' => 'add.page']);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$data	 = $form->getData();
			$slug	 = $this->get('cms.slugger');
			$content->setSlug($slug->slugify($data->getName()));
			$content->setName($data->getName());
			$content->setContent($data->getContent());
			$content->setAuthor($user);
			$content->setLang($data->getLang());
			$content->setCreatedTime(time());

			$em = $this->getDoctrine()->getManager();

			$em->persist($content);

			$em->flush();

			return $this->redirectToRoute('admin_content_manage');
		}

		return new Response($this->renderView('@styles/backend/content/add_edit_form.html.twig', [
					'sub_header' => 'add.page',
					'form'		 => $form->createView(),
					'title'		 => 'content',
					'active'	 => 'content',
					'sub_active' => 'page',
					'sub_menu'	 => 'page.add',
		]));
	}

	public function editAction(Request $request) {
		$content	 = $this->getDoctrine()
				->getRepository('CMS:Page')
				->find($request->get('id'));

		if (!$content) {
			throw $this->createNotFoundException('No Content Page Found using This ID "' . $request->get('id'). '"');
		}

		$form = $this->createForm(PageType::class, $content)
				->add('save', SubmitType::class, ['label' => 'edit.page']);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$data	 = $form->getData();
			$slug	 = $this->get('cms.slugger');
			$content->setSlug($slug->slugify($data->getName()));
			$content->setName($data->getName());

			$content->setContent($data->getContent());
			$content->setLang($data->getLang());

			$em = $this->getDoctrine()->getManager();

			$em->persist($content);

			$em->flush();

			return $this->redirectToRoute('admin_content_manage');
		}

		return new Response($this->renderView('@styles/backend/content/add_edit_form.html.twig', [
					'sub_header' => 'Edit a Page',
					'form'		 => $form->createView(),
					'title'		 => 'content',
					'active'	 => 'content',
					'sub_active' => 'page',
					'sub_menu'	 => 'page.list'
		]));
	}

	public function deleteAction(Request $request) {
		$content = $this->getDoctrine()
				->getRepository('CMS:Page')
				->find($request->get('id'));

		if (!$content) {
			throw $this->createNotFoundException('No content page found using this ID "' . $request->get('id') .'"');
		}

		$em = $this->getDoctrine()->getManager();
		$em->remove($content);
		$em->flush();

		return $this->redirectToRoute('admin_content_manage');
	}

}
