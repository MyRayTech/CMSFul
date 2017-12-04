<?php


/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * NavigationController
 */
class NavigationController extends Controller
{
    public function createViewAction() {
            $nav = $this->getDoctrine()->getManager()->getRepository('CMS:Navigation')->findTopLine();
        return $this->render('@styles/navigation.html.twig', [
                'navigation'=> $nav
        ]);
    }
    
    public function getChildAction(Request $request) {
        $nav = $this->getDoctrine()->getManager()->getRepository('CMS:Navigation')->findByParent($request->get('id'));
        return $this->render('@styles/sub_navigation.html.twig', [
                'navigation'=> $nav
        ]);
    }
}
