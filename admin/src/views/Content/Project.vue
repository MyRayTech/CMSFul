<template>
    <b-container fluid>
        <b-row>
            <b-col md="12">
                <h1>Project</h1>
                <b-tabs>
                    <b-tab title="List" active>
                        <b-table striped hover :items="projects" :fields="fields">
                                 <template slot="actions" slot-scope="data">
                                <i @click="editModal(data.item.id)" class="fa fa-edit"></i>
                                <i @click="deleteModal(data.item.id)" class="fa fa-remove"></i>
                            </template>
                        </b-table>
                    </b-tab>
                    <b-tab title="Create Project">
                        <b-form id="addProject" class="form" @submit="handleAdd" @reset="handleReset">
                            <b-row>
                                <b-col md="6">
                                    <b-form-group label='Project Name'
                                                  label-for='project_name'>
                                        <b-form-input v-model='editData.name'
                                                      type='text'
                                                      id='project_name'> 
                                        </b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col md="6">
                                    <b-form-group label='Budget'
                                                  label-for='project_budget'>
                                        <b-form-input v-model='editData.budget'
                                                      type='number'
                                                      id='project_budget'>
                                        </b-form-input>
                                    </b-form-group>
                                </b-col>
                                <b-col md="12">
                                    <b-form-group label='Description'
                                                  label-for='project_desc'>
                                        <b-form-textarea v-model='editData.description'
                                                         id='project_desc'>
                                        </b-form-textarea>
                                    </b-form-group>
                                </b-col>
                                
                                <b-col md="12">
                                    
                                </b-col>
                            </b-row>
                        </b-form>

                    </b-tab>
                    <b-tab title="Settings">
                        <b-form>
                            <b-form-group label="Projects showcase page title"
                                          label-for="project_title">
                                <b-input type="text"
                                         id="project_title"
                                         name="settings_title"
                                         v-model=""
                            </b-form-group>
                        </b-form>
                    </b-tab>
                </b-tabs>
                <b-modal 
                    centered="true"
                    ok-title="Save"
                    cancel-disabled="true"
                    ref="editProject"
                    id="edit"
                    title="Edit Project"
                    @ok="handleEdit">
                    <b-form>
                        <b-form-group label='Project Name'
                                      label-for='project_name'>
                            <b-form-input v-model='editData.name'
                                          type='text'
                                          id='project_name'> 
                            </b-form-input>
                        </b-form-group>
                        <b-form-group label='Description'
                                      label-for='project_desc'>
                            <b-form-textarea v-model='editData.description'
                                             id='project_desc'>
                            </b-form-textarea>
                        </b-form-group>
                        <b-form-group label='Budget'
                                      label-for='project_budget'>
                            <b-form-input v-model='editData.budget'
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
            </b-col>
        </b-row>
    </b-container>    
</template>

<script>
    export default {
        name: 'project',
        data()
        {
            return {
                editData: {},
                fields: ['name', 'slug', 'budget', 'actions']
            };
        },
        computed: {
            projects()
            {
                return this.$store.getters['projects/projects']
            }
        },
        methods: {
            editModal(id)
            {
                this.$store.dispatch('projects/grabOne', id)
                        .then((response) => {
                            this.editData = response[0]
                            this.$refs.editProject.show()
                        })

            },
            deleteModal(id)
            {
                this.$refs.deleteProject.show()
            },
            handleAdd()
            {

            },
            handleEdit(evt)
            {
                this.$store.dispatch('projects/update', this.editData)
                        .then((response) => {

                        })
            },
            handleDelete(evt, id)
            {
                this.$store.dispatch('projects/delete', id)
                        .then((response) => {

                        })
            },
            handleReset()
            {
                evt.preventDefault();
                /* Reset our form values */
                this.editData = this.$store.getters('projects/projects');
                /* Trick to reset/clear native browser form validation state */
                this.show = false;
                this.$nextTick(() => {
                    this.show = true
                });
            }
        },
        mounted()
        {
            this.$store.dispatch('projects/grab')
        }
    }
</script>