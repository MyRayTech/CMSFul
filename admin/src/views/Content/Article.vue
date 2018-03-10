<template>
    <b-container fluid>
        <b-row>
            <b-col md="12">
                <h1>Article</h1>
            </b-col>
            <b-col md="12">
                <b-tabs>
                    <b-tab title="List" active>
                        <b-table striped hover :items="articles" :fields="fields">
                            <template slot="actions" slot-scope="data">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-remove"></i>
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
        name: 'article',
        data()
        {
            return {
                fields: ['id', 'name', 'slug', 'actions']
            };
        },
        computed: {
            articles()
            {
                return this.$store.getters['articles/articles']
            }
        },
        mounted()
        {
            this.$store.dispatch('articles/grab')
        }
    }
</script>
