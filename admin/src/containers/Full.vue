<template>
    <div class="app">
        <AppHeader/>
        <template v-if="authed === false">
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
                authed: false,
                nav: nav.items
            }
        },
        watch: {
            authed()
            {
                const token = this.$store.getters.generalSettings
                if(!token || token === '' || token === null)
                {
                    return false
                }
                return true
            }
        },
        computed: {
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
            tokenIsSet(set) {
                if(set)
                {
                    this.$nextTick(() => {this.authed = set})
                }
            }
        } 
    }
</script>
