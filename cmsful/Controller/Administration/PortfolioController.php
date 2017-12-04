<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use CMS\Form\Content\ProjectType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use CMS\Entity\Project;
use CMS\Util\Slugger;

/**
 * PortfolioController
 */
class PortfolioController extends Controller implements AdminControllerInterface
{

    public function addAction(Request $request) {
        $config = $this->get('cms.config');
        $project = new Project();
        $slugger = new Slugger();
        $form   = $this->createForm(ProjectType::class, $project)
                ->add('save', SubmitType::class, ['label' => 'save.project']);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data    = $form->getData();
            
            if ($data->getFile() !== null) {
                /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $data->getFile();
                
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();

                $file->move($config->get('portfolio.path'), $fileName);

                $project->setImage($fileName);
            } else {
                $project->setImage($data->getImage());
            }
            $project->setName($data->getName());
			$project->setSlug($slugger->slugify($data->getName()));
            $project->setSubheader($data->getSubheader());
            $project->setDate($data->getDate());
            $project->setDescription($data->getDescription());
            $project->setBudget($data->getBudget());
            
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($project);
            $em->flush();
            
            return $this->redirectToRoute('admin_portfolio_manage');
        }
        return new Response($this->renderView('@styles/backend/portfolio/form.html.twig', [
                    'title'      => 'portfolio',
                    'sub_header' => 'create.project',
                    'active'     => 'content',
                    'sub_active' => 'portfolio',
                    'sub_menu'   => 'portfolio.add',
                    'form'       => $form->createView(),
        ]));
    }

    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('CMS:Project')->find($request->get('id'));
        
        $em->remove($project);
        $em->flush();
        return $this->redirectToRoute('admin_portfolio_manage');
    }

    public function editAction(Request $request) {
        $config = $this->get('cms.config');
		$slugger = new Slugger();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('CMS:Project')->find($request->get('id'));
        
        $form   = $this->createForm(ProjectType::class, $project)
                ->add('save', SubmitType::class, ['label' => 'project.save']);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $data    = $form->getData();
            if ($data->getImage() !== null) {
                $project->setImage($data->getImage());
            } else {
                /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $data->getFile();
                
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()) . '.' . $file->guessClientExtension();

                $file->move($config->get('portfolio.path'), $fileName);
                
                $project->setImage($fileName);
            }
            $project->setName($data->getName());
			$project->setSlug($slugger->slugify($data->getName()));
            $project->setSubheader($data->getSubheader());
            $project->setDate($data->getDate());
            $project->setDescription($data->getDescription());
            $project->setBudget($data->getBudget());
            
            $em->persist($project);
            $em->flush();
            
            return $this->redirectToRoute('admin_portfolio_manage');
        }
        return new Response($this->renderView('@styles/backend/portfolio/form.html.twig', [
                    'title'      => 'portfolio',
                    'sub_header' => 'project.edit',
                    'active'     => 'content',
                    'sub_active' => 'portfolio',
                    'sub_menu'   => 'portfolio.list',
                    'form'       => $form->createView(),
        ]));
    }

    public function indexAction() {
        $projects = $this->getDoctrine()->getManager()->getRepository('CMS:Project')->findAll();

        return new Response($this->renderView('@styles/backend/portfolio/index.html.twig', [
                    'projects'   => $projects,
                    'title'      => 'project.list',
                    'active'     => 'content',
                    'sub_active' => 'portfolio',
                    'sub_menu'   => 'portfolio.list',
        ]));
    }

    public function settingsAction(Request $request) {
        $config = $this->get('cms.config');

        $form = $this->createFormBuilder()
                ->add('title', TextType::class, ['data' => $config->get('portfolio.title')])
                ->add('number_columns', ChoiceType::class, ['data' => $config->get('portfolio.number_columns'), 'choices' => [
                    '1' => 'one',
                    '2' => 'two',
                    '3' => 'three',
                    '4' => 'four'
                ]])
                ->add('path',TextType::class,['data' => $config->get('portfolio.path')])
                ->add('max_per_page', IntegerType::class, ['data' => $config->get('portfolio.max_per_page')])
                ->add('save', SubmitType::class)
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $config->set(['portfolio.number_columns', $data['number_columns']]);
            $config->set(['portfolio.path', $data['path']]);
            $config->set(['portfolio.max_per_page', $data['max_per_page']]);
            $config->set(['portfolio.title', $data['title']]);
            return $this->redirectToRoute('admin.cache_clear',['redirect' => 'admin_portfolio_manage']);
        }
        
        return new Response($this->renderView('@styles/backend/portfolio/settings.html.twig', [
                    'title'      => 'portfolio.settings',
                    'active'     => 'content',
                    'sub_active' => 'portfolio',
                    'sub_menu'   => 'portfolio.settings',
                    'form'       => $form->createView(),
        ]));
    }

}
