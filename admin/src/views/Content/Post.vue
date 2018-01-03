<template>
    <b-container fluid>
        <b-row>
            <b-col md="12">
                <h1>Post</h1>
            </b-col>
            <b-col md="12">
                    <b-tabs>
                        <b-tab title="List" active>
                            <b-table striped hover :items="posts" :fields="fields">
                                     <template slot="actions" slot-scope="data">
                                    <router-link :to="{ name: 'editPost', params: { id: data.item.id}}"><i class="fa fa-edit"></i></router-link>
                                    <router-link :to="{ name: 'deletePost', params: { id: data.item.id}}"><i class="fa fa-remove"></i></router-link>
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
        name: 'post',
        data() {
            return {
                fields: ['id','name', 'slug','actions']
            };
        },
        computed: {
            posts() {
                return this.$store.getters.getPosts
            }
        },
        mounted() {
            this.$store.dispatch('grabPosts')
        }
    }
</script>
