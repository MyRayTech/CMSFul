<template>
    <div class="app">
        <AppHeader/>
        <template v-if="authed == false">
            <Login @tokenIsSet="tokenIsSet"/>
        </template>
        <template v-else>
            <div class="app-body">
                <Sidebar :navItems="nav"/>
                <main class="main">
                    <breadcrumb :list="list"/>
                    <router-view></router-view>
                </main>
                <AppAside/>
            </div>
            <AppFooter/>
        </template>    
    </div>
</template>

<script>
    import nav from '../_nav'
    import { Header as AppHeader, Sidebar, Aside as AppAside, Footer as AppFooter, Breadcrumb, Login } from '../components/'

    export default {
        name: 'full',
        components: {
            AppHeader,
            Sidebar,
            AppAside,
            AppFooter,
            Breadcrumb,
            Login
        },
        data()
        {
            return {
                nav: nav.items
            }
        },
        computed: {
            authed()
            {
                if(this.$store.getters.getToken !== null)
                {
                    return true
                }
                return false
            },
            name()
            {
                return this.$route.name
            },
            list()
            {
                return this.$route.matched
            }
        },
        methods: {
            tokenIsSet() {
                auth
            }
        }
    }
</script>
