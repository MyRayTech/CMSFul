<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMS\Form\RegisterType;
/**
 *  Security Registration Controller
 */
class RegistrationController extends Controller
{
    public function viewAction() {
        $form = $this->createForm(RegisterType::class);
        return $this->render('@styles/register.html.twig', [
            'title'     => 'Register',
            'form'      => $form->createView()
        ]);
    }
}
