<?php


/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of Main
 */
class MainController extends AbstractController
{
	public function indexAction(Request $request)
	{
                if($request->getLocale() !== 'fr') {
                    $homepage = 'home';
                }
                else {
                    $homepage = 'acceuil';
                }
		$content = $this->getDoctrine()
				->getRepository('CMS:Page')
				->findOneBySlug([$homepage, $request->getLocale()]);
		if (!$content)
		{
			throw $this->createNotFoundException('Page URL Not Found!');
		}
		return $this->render('@styles/homepage.html.twig',[
			'active' => strtolower($content->getName()),
			'title' => ucfirst($content->getName()),
			'content' => $content->getContent(),
		]);
	}
	
	public function pageAction(Request $request, $slug)
	{
		$content = $this->getDoctrine()
				->getRepository('CMS:Page')
				->findOneBy(['slug'=> $slug, 'lang' => $request->getLocale()]);
		if (!$content)
		{
			throw $this->createNotFoundException('Page URL Not Found!');
		}

		return new Response($this->renderView('@styles/page.html.twig',[
			'active' => strtolower($content->getName()),
			'title' => ucfirst($content->getName()),
			'content' => $content->getContent(),
		]));
	}
}