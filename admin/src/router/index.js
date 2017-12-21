import Vue from 'vue';
import Router from 'vue-router';

// Containers
import Full from '../containers/Full';

// Views
import NotFound from '../components/NotFound'
import Dashboard from '../views/Dashboard';
import General from '../views/General';
import Content from '../views/Content';
import Settings from '../views/General/Settings';
import Page from '../views/Content/Page';
import Post from '../views/Content/Post';
import Article from '../views/Content/Article';
import Project from '../views/Content/Project';

Vue.use(Router)

export default new Router({
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
                            component: Project
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
