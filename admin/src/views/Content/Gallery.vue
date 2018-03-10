<template>
    <b-container fluid>
        <b-row>
            <b-col md="12">
                <h1>Gallery</h1>
            </b-col>
            <b-col md="12">
                <b-tabs>
                    <b-tab title="List" active>
                        <b-table striped hover :items="items" :fields="fields">
                                 <template slot="actions" slot-scope="data">
                                <i @click="editModal" class="fa fa-edit"></i>
                                <i class="fa fa-remove"></i>
                            </template>
                        </b-table>
                    </b-tab>
                    <b-tab title="Settings">

                    </b-tab>
                </b-tabs>
                <b-modal ref="edit" id="edit" title="Edit Image">
                    this is a modal test
                </b-modal>
            </b-col>
        </b-row>
    </b-container>

</template>

<script>
    export default {
        name: 'gallery',
        data()
        {
            return {
                fields: ['id', 'description', 'filename', 'actions']
            };
        },
        methods: {
            editModal()
            {
                this.$ref.edit.show()
            }
        },
        computed: {
            items()
            {
                return this.$store.getters['gallery/images']
            }
        },
        mounted()
        {
            this.$store.dispatch('gallery/grab')
        }
    }
</script>