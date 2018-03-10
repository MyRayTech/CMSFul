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
                            <b-table
                                striped
                                hover
                                :items="pages"
                                :fields="fields">
                                <template 
                                    slot="actions"
                                    slot-scope="data">
                                    <i @click="editModal(data.item.id)" class="fa fa-edit"></i>
                                    <i @click="deleteModal(data.item.id)" class="fa fa-remove"></i>
                                </template>
                            </b-table>
                        </b-tab>
                        <b-tab title="Create Page">
                            <b-form @submit="handleAdd" @reset="handleReset">
                                <b-row>
                                    <b-col md="6">
                                    <b-form-group
                                        label='Page Name'
                                        label-for='page_name'>
                                        <b-form-input
                                            v-model='editData.name'
                                            type='text'
                                            id='page_name'> 
                                        </b-form-input>
                                    </b-form-group>
                                    </b-col>
                                    <b-col md="6">
                                    <b-form-group
                                        label='Slug'
                                        label-for='page_slug'>
                                        <b-form-input
                                            v-model='editData.slug'
                                            type='text'
                                            id='page_slug'>
                                        </b-form-input>
                                    </b-form-group>
                                    </b-col>
                                    <b-col md="12">
                                        <Builder :page="editData.content" />
                                    </b-col>
                                </b-row>
                            </b-form>
                        </b-tab>
                        <b-tab title="Settings">

                        </b-tab>
                    </b-tabs>
                </b-col>
            </b-row>
        </b-container>

        <b-modal 
            centered="true"
            ok-title="Save"
            cancel-disabled="true"
            ref="editProject"
            id="edit"
            title="Edit Project"
            @ok="handleEdit">
            <b-form>
                <b-form-group
                    label='Project Name'
                    label-for='project_name'>
                    <b-form-input 
                        v-model='editData.name'
                        type='text'
                        id='project_name'> 
                    </b-form-input>
                </b-form-group>
                <b-form-group
                    label='Slug'
                    label-for='project_slug'>
                    <b-form-input
                        v-model='editData.slug'
                        type='text'
                        id='project_slug'>
                    </b-form-input>
                </b-form-group>
                <b-form-group
                    label='Description'
                    label-for='project_desc'>
                    <b-form-textarea
                        v-model='editData.description'
                        id='project_desc'>
                    </b-form-textarea>
                </b-form-group>
                <b-form-group
                    label='Budget'
                    label-for='project_budget'>
                    <b-form-input 
                        v-model='editData.budget'
                        type='number'
                        id='project_budget'>
                    </b-form-input>
                </b-form-group>
            </b-form>
        </b-modal>
        <b-modal
            centered
            ok-title="Yes"
            cancel-disabled=true
            ref="deleteProject"
            id="delete"
            title="Delete Project"
            @ok="handleDelete">
            Are you sure you want to delete?
        </b-modal>

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
                fields: ['id', 'name', 'slug', 'actions'],
                editData: {}
            };
        },
        methods: {
            editModal(id)
            {
                this.$store.dispatch('page/grabOne', id)
                        .then((response) => {
                            this.editData = response[0]
                            this.$refs.editProject.show()
                        })

            },
            handleAdd()
            {

            },
            handleEdit()
            {

            },
            handleDelete()
            {

            },
            handleReset()
            {

            }
        },
        computed: {
            pages()
            {
                return this.$store.getters.pages
            }
        },
        mounted()
        {
            this.$store.dispatch('pages/grab')
        }
    }
</script>