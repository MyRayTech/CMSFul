<?php

namespace Install\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * MainController
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class MainController extends Controller
{

    public function mainAction(Request $request) {
        $step = $request->get('step');
        switch ($step) {
            case 1:
            default:
                $data = [];
                break;
            case 2:
                dump(PHP_VERSION);
                $version_check = false;
                if (version_compare(PHP_VERSION, '7.0.0', '>=')) {
                    $version_check = true;
                } 
                    $version = PHP_VERSION;
                $data = [
                    'version'   => $version,
                    'version_check' => $version_check,
                ];
                break;
        }
        return $this->render('@styles/step_' . $step . '.html.twig', [
                    'step' => $step,
                    'data' => $data,
        ]);
    }

}
