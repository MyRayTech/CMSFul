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
use Doctrine\ORM\EntityManagerInterface;
/**
 * WidgetController
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class WidgetController extends Controller
{
    const WIDGET_HTML = 0;
    const WIDGET_CAROUSEL = 1;
    const WIDGET_IMAGE = 2;
    const WIDGET_VIDEO = 3;
    const WIDGET_NEWS = 4;
    const WIDGET_BLOG = 5;
    
    protected $em;
    protected $template;
    
    public function __construct(EntityManagerInterface $manager, \Twig_Environment $template) {
        $this->em = $manager;
        $this->template = $template;
    }
    
    public function getWidget($name) {
        $widgets = $this->em->getRepository('CMS:Widget')
                ->findByName($name);
        foreach($widgets as $widget) {
            if($widget->getType() == self::WIDGET_CAROUSEL) {

                return $this->template->render('@styles/widget/carousel.widget.twig', [
                    'slider' => json_decode($widget->getCode()),
                ]);

            } 
            elseif ($widget->getType() == self::WIDGET_IMAGE){
                return $this->template->render('@styles/widget/image.widget.twig', [
                    'code' => json_decode($widget->getCode(), true)
                ]);
            }
            else
            {
            return $widget->getCode();
            }
        }
    }
}
