<template>
<b-container fluid>
        <b-row>
            <b-col md="12">
                <h1>Project</h1>
                <b-tabs>
                    <b-tab title="List" active>
                        <b-table striped hover :items="projects" :fields="fields">
                            <template slot="actions" slot-scope="data">
                                <router-link :to="{ name: 'editProject', params: { id: data.item.id}}"><i class="fa fa-edit"></i></router-link>
                                <router-link :to="{ name: 'deleteProject', params: { id: data.item.id}}"><i class="fa fa-remove"></i></router-link>
                            </template>
                        </b-table>
                    </b-tab>
                    <b-tab title="Settings">
                        
                    </b-tab>
                </b-tabs>
            </b-col>
        </b-row>
    </b-container>    
</template>

<script>
    export default {
        name: 'project',
        data() {
            return {
                fields: ['id', 'name', 'slug', 'budget', 'actions']
            };
        },
        computed: {
            projects() {
                return this.$store.getters.getProjects
            }
        },
        mounted() {
            this.$store.dispatch('grabProjects')
        }
    }
</script>