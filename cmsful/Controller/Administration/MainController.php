<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MainController extends Controller
{
    public function indexAction() {
        $acl = $this->get('cms.acl');
        if (!$acl->granted('admin.dashboard')) {
            throw new AccessDeniedException('You do not have the required permission for this page.');
        }
								
        return new Response($this->renderView('@styles/backend/layout.html.twig', [
																								'title'      => 'dashboard'	]), Response::HTTP_OK );
    }

    public function cacheClearAction(Request $request) {
        $kernel      = $this->get('kernel');
        $application = new Application($kernel);
        $input       = new ArrayInput([
            'command' => 'cache:clear',
            '-e'      => 'dev',
        ]);
        $output      = new BufferedOutput();

        $application->setAutoExit(false);
        $application->run($input, $output);

        $content = $output->fetch();
        $success = (bool) preg_match('/successfully/', $content);

        if ($success) {
												if($request->get('redirect')){
																return $this->redirectToRoute($request->get('redirect'));
												}
												return $this->redirectToRoute('admin_panel');
        }
        return $this->redirectToRoute('admin_panel');
    }

//	public function moduleAction(Request $request, $module)
//	{
//		$obj = __NAMESPACE__ .'\\'. ucfirst($module) . 'Controller';
//		$class = new $obj;
//		$index_html = $class->indexAction($this);
//		$params = [
//			'content'	=> $index_html['content'],
//		];
//		$params = array_merge($params, $index_html['params']);
//		$html = $this->renderView("@styles/default/backend/{$module}.html.twig",$params);
//		
//		return new Response($html);
//	}
}
