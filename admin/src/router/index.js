import Vue from 'vue';
import store from '../store/'
import Router from 'vue-router';

// Containers
import Full from '../containers/Full';

// Views
import NotFound from '../components/NotFound';
import Login from '../components/Login';
import Dashboard from '../views/Dashboard';
import General from '../views/General';
import Content from '../views/Content';
import Settings from '../views/General/Settings';
import Page from '../views/Content/Page';
import Post from '../views/Content/Post';
import Article from '../views/Content/Article';
import Project from '../views/Content/Project';
import Gallery from '../views/Content/Gallery';

Vue.use(Router)

const router = new Router({
    mode: 'hash',
    linkActiveClass: 'open active',
    scrollBehavior: () => ({y: 0}),
    routes: [
        {
            path: '/',
            redirect: '/dashboard',
            name: 'Home',
            component: Full,
            children: [
                {
                    path: 'login',
                    name: 'Login',
                    component: Login
                },
                {
                    path: 'dashboard',
                    name: 'Dashboard',
                    component: Dashboard
                },
                {
                    path: 'general',
                    name: 'General',
                    component: General,
                    children: [
                        {
                            path: 'settings',
                            name: 'Settings',
                            component: Settings
                        }
                    ]
                },
                {
                    path: 'content',
                    name: 'Content',
                    component: Content,
                    children: [
                        {
                            path: 'page',
                            name: 'Page',
                            component: Page
                        },
                        {
                            path: 'post',
                            name: 'Post',
                            component: Post
                        },
                        {
                            path: 'article',
                            name: 'Article',
                            component: Article
                        },
                        {
                            path: 'project',
                            name: 'Project',
                            component: Project,
                            children: [
                                {
                                    path: 'add',
                                    name: 'addProject'
                                },
                                {
                                    path: 'edit/:id',
                                    name: 'editProject',
                                },
                                {
                                    path: 'delete/:id',
                                    name: 'deleteProject'
                                }
                            ]
                        },
                        {
                            path: 'gallery',
                            name: 'Gallery',
                            component: Gallery
                        }
                    ]
                }
            ]
        },
        {
            path:'*',
            component: NotFound
        }
    ]
})

export default router