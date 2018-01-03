<template>
    <section id="Page">
        <b-container fluid>
            <b-row>
                <b-col md="12">
                    <h1>Pages</h1>
                </b-col>
                <b-col md="12">
                    <b-tabs>
                        <b-tab title="List" active>
                            <b-table striped hover :items="pages" :fields="fields">
                                     <template slot="actions" slot-scope="data">
                                    <router-link :to="{ name: 'editPage', params: { id: data.item.id}}"><i class="fa fa-edit"></i></router-link>
                                    <router-link :to="{ name: 'deletePage', params: { id: data.item.id}}"><i class="fa fa-remove"></i></router-link>
                                </template>
                            </b-table>
                        </b-tab>
                        <b-tab title="Settings">

                        </b-tab>
                    </b-tabs>
                </b-col>
            </b-row>
        </b-container>

    </section>
</template>

<script>
    import Builder from '../../components/Builder.vue';

    export default {
        name: 'page',
        components: {
            Builder: Builder
        },
        data()
        {
            return {
                fields: ['id', 'name', 'slug','actions']
            };
        },
        computed: {
            pages() {
                return this.$store.getters.pages
            }
        },
        mounted()
        {
            this.$store.dispatch('grabPages')
        }
    }
</script>