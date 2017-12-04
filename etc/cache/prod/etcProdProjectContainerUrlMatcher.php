<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * etcProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class etcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/admin')) {
            // admin.general.settings
            if ('/admin/general/settings' === $pathinfo) {
                return array (  '_controller' => 'CMS\\Controller\\Administration\\GeneralController::settingsAction',  '_route' => 'admin.general.settings',);
            }

            if (0 === strpos($pathinfo, '/admin/gallery')) {
                // admin.gallery
                if ('/admin/gallery' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin.gallery');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\GalleryController::indexAction',  '_route' => 'admin.gallery',);
                }

                // admin.gallery.settings
                if ('/admin/gallery/settings' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\GalleryController::settingsAction',  '_route' => 'admin.gallery.settings',);
                }

                // admin.gallery.add
                if ('/admin/gallery/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\GalleryController::addAction',  '_route' => 'admin.gallery.add',);
                }

                // admin.gallery.edit
                if (0 === strpos($pathinfo, '/admin/gallery/edit') && preg_match('#^/admin/gallery/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.gallery.edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\GalleryController::editAction',));
                }

                // admin.gallery.delete
                if (0 === strpos($pathinfo, '/admin/gallery/delete') && preg_match('#^/admin/gallery/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin.gallery.delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\GalleryController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/navigation')) {
                // admin_navigation_add
                if ('/admin/navigation/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\NavigationController::addAction',  '_route' => 'admin_navigation_add',);
                }

                // admin_navigation_edit
                if (0 === strpos($pathinfo, '/admin/navigation/edit') && preg_match('#^/admin/navigation/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_navigation_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\NavigationController::editAction',));
                }

                // admin_navigation_delete
                if (0 === strpos($pathinfo, '/admin/navigation/delete') && preg_match('#^/admin/navigation/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_navigation_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\NavigationController::deleteAction',));
                }

                // admin_navigation_manage
                if ('/admin/navigation' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_navigation_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\NavigationController::indexAction',  '_route' => 'admin_navigation_manage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/news')) {
                // admin_news_add
                if ('/admin/news/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\NewsController::addAction',  '_route' => 'admin_news_add',);
                }

                // admin_news_edit
                if (0 === strpos($pathinfo, '/admin/news/edit') && preg_match('#^/admin/news/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\NewsController::editAction',));
                }

                // admin_news_delete
                if (0 === strpos($pathinfo, '/admin/news/delete') && preg_match('#^/admin/news/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\NewsController::deleteAction',));
                }

                // admin_news_manage
                if ('/admin/news' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_news_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\NewsController::indexAction',  '_route' => 'admin_news_manage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/users')) {
                // admin_users_add
                if ('/admin/users/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\UsersController::addAction',  '_route' => 'admin_users_add',);
                }

                // admin_users_edit
                if (0 === strpos($pathinfo, '/admin/users/edit') && preg_match('#^/admin/users/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\UsersController::editAction',));
                }

                // admin_users_delete
                if (0 === strpos($pathinfo, '/admin/users/delete') && preg_match('#^/admin/users/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\UsersController::deleteAction',));
                }

                // admin_users_change_pass
                if (0 === strpos($pathinfo, '/admin/users/password-reset') && preg_match('#^/admin/users/password\\-reset/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_change_pass')), array (  '_controller' => 'CMS\\Controller\\Administration\\UsersController::passAction',));
                }

                // admin_users_role
                if (0 === strpos($pathinfo, '/admin/users/role') && preg_match('#^/admin/users/role/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_role')), array (  '_controller' => 'CMS\\Controller\\Administration\\UsersController::roleAction',));
                }

                // admin_users_manage
                if ('/admin/users' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_users_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\UsersController::indexAction',  '_route' => 'admin_users_manage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/roles')) {
                // admin_role_add
                if ('/admin/roles/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\RoleController::addAction',  '_route' => 'admin_role_add',);
                }

                // admin_role_edit
                if (0 === strpos($pathinfo, '/admin/roles/edit') && preg_match('#^/admin/roles/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\RoleController::editAction',));
                }

                // admin_role_delete
                if (0 === strpos($pathinfo, '/admin/roles/delete') && preg_match('#^/admin/roles/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\RoleController::deleteAction',));
                }

                // admin_role_manage
                if ('/admin/roles' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_role_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\RoleController::indexAction',  '_route' => 'admin_role_manage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/portfolio')) {
                // admin_portfolio_add
                if ('/admin/portfolio/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\PortfolioController::addAction',  '_route' => 'admin_portfolio_add',);
                }

                // admin_portfolio_edit
                if (0 === strpos($pathinfo, '/admin/portfolio/edit') && preg_match('#^/admin/portfolio/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_portfolio_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\PortfolioController::editAction',));
                }

                // admin_portfolio_delete
                if (0 === strpos($pathinfo, '/admin/portfolio/delete') && preg_match('#^/admin/portfolio/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_portfolio_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\PortfolioController::deleteAction',));
                }

                // admin_portfolio_setting
                if ('/admin/portfolio/settings' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\PortfolioController::settingsAction',  '_route' => 'admin_portfolio_setting',);
                }

                // admin_portfolio_manage
                if ('/admin/portfolio' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_portfolio_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\PortfolioController::indexAction',  '_route' => 'admin_portfolio_manage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/blog')) {
                // admin_blog_add
                if ('/admin/blog/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\BlogController::addAction',  '_route' => 'admin_blog_add',);
                }

                // admin_blog_edit
                if (0 === strpos($pathinfo, '/admin/blog/edit') && preg_match('#^/admin/blog/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\BlogController::editAction',));
                }

                // admin_blog_delete
                if (0 === strpos($pathinfo, '/admin/blog/delete') && preg_match('#^/admin/blog/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\BlogController::deleteAction',));
                }

                // admin_blog_manage
                if ('/admin/blog' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_blog_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\BlogController::indexAction',  '_route' => 'admin_blog_manage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/content')) {
                // admin_content_add
                if ('/admin/content/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\ContentController::addAction',  '_route' => 'admin_content_add',);
                }

                // admin_content_edit
                if (0 === strpos($pathinfo, '/admin/content/edit') && preg_match('#^/admin/content/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\ContentController::editAction',));
                }

                // admin_content_delete
                if (0 === strpos($pathinfo, '/admin/content/delete') && preg_match('#^/admin/content/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\ContentController::deleteAction',));
                }

                // admin_content_manage
                if ('/admin/content' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_content_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\ContentController::indexAction',  '_route' => 'admin_content_manage',);
                }

            }

            // admin.cache_clear
            if ('/admin/cache-clear' === $pathinfo) {
                return array (  '_controller' => 'CMS\\Controller\\Administration\\MainController::cacheClearAction',  '_route' => 'admin.cache_clear',);
            }

            if (0 === strpos($pathinfo, '/admin/widget')) {
                // admin_widget_add
                if ('/admin/widget/add' === $pathinfo) {
                    return array (  '_controller' => 'CMS\\Controller\\Administration\\WidgetController::addAction',  '_route' => 'admin_widget_add',);
                }

                // admin_widget_edit
                if (0 === strpos($pathinfo, '/admin/widget/edit') && preg_match('#^/admin/widget/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_widget_edit')), array (  '_controller' => 'CMS\\Controller\\Administration\\WidgetController::editAction',));
                }

                // admin_widget_delete
                if (0 === strpos($pathinfo, '/admin/widget/delete') && preg_match('#^/admin/widget/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_widget_delete')), array (  '_controller' => 'CMS\\Controller\\Administration\\WidgetController::deleteAction',));
                }

                // admin_widget_manage
                if ('/admin/widget' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_widget_manage');
                    }

                    return array (  '_controller' => 'CMS\\Controller\\Administration\\WidgetController::indexAction',  '_route' => 'admin_widget_manage',);
                }

            }

            // admin_panel
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_panel');
                }

                return array (  '_controller' => 'CMS\\Controller\\Administration\\MainController::indexAction',  '_route' => 'admin_panel',);
            }

        }

        // news_index
        if (preg_match('#^/(?P<_locale>en|fr)/news$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_index')), array (  '_controller' => 'CMS\\Controller\\NewsController::indexAction',));
        }

        // news_article
        if (preg_match('#^/(?P<_locale>en|fr)/article/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_article')), array (  '_controller' => 'CMS\\Controller\\NewsController::articleAction',));
        }

        // page_main
        if (preg_match('#^/(?P<_locale>en|fr)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_main')), array (  '_controller' => 'CMS\\Controller\\MainController::pageAction',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/gallerie')) {
            // gallery.page
            if (0 === strpos($pathinfo, '/gallerie/page') && preg_match('#^/gallerie/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallery.page')), array (  '_controller' => 'CMS\\Controller\\GalleryController::indexAction',));
            }

            // gallery.main
            if ('/gallerie' === $pathinfo) {
                return array (  '_controller' => 'CMS\\Controller\\GalleryController::indexAction',  'page' => 1,  '_route' => 'gallery.main',);
            }

        }

        // blog_post
        if (preg_match('#^/(?P<_locale>en|fr)/post/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_post')), array (  '_controller' => 'CMS\\Controller\\BlogController::postAction',));
        }

        if (0 === strpos($pathinfo, '/portfolio')) {
            // portfolio.project_detail
            if (0 === strpos($pathinfo, '/portfolio/project') && preg_match('#^/portfolio/project/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio.project_detail')), array (  '_controller' => 'CMS\\Controller\\PortfolioController::projectAction',));
            }

            // portfolio.page
            if (0 === strpos($pathinfo, '/portfolio/page') && preg_match('#^/portfolio/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portfolio.page')), array (  '_controller' => 'CMS\\Controller\\PortfolioController::indexAction',));
            }

            // portfolio.index
            if ('/portfolio' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'portfolio.index');
                }

                return array (  '_controller' => 'CMS\\Controller\\PortfolioController::indexAction',  'page' => 1,  '_route' => 'portfolio.index',);
            }

        }

        // comment_save
        if ('/save-comment' === $pathinfo) {
            return array (  '_controller' => 'CMS\\Controller\\CommentController::getFormAction',  '_route' => 'comment_save',);
        }

        // cms_index_page
        if (preg_match('#^/(?P<_locale>en|fr)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cms_index_page')), array (  '_controller' => 'CMS\\Controller\\MainController::indexAction',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'CMS\\Controller\\Security\\LoginController::loginAction',  '_route' => 'login',);
            }

            // security_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'CMS\\Controller\\Security\\LoginController::checkAction',  '_route' => 'security_check',);
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'CMS\\Controller\\Security\\RegistrationController::viewAction',  '_route' => 'register',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
