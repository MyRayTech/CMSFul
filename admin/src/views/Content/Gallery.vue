<template>
    <b-container fluid>
        <b-row>
            <b-col md="12">
                <h1>Article</h1>
            </b-col>
            <b-col md="12">
                <b-tabs>
                    <b-tab title="List" active>
                        <b-table striped hover :items="pages">
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
</template>

<script>
    export default {
        name: 'gallery'
    }
</script>