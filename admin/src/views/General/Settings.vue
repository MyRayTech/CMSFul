<template>
    <section id="settings">
        <b-container fluid>
            <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                <b-card header="Settings"
                        header-tag="h4">
                    <b-row>
                        <b-col sm="12">
                            <b-form-group label="Sitename">
                                <b-form-input v-model="form.sitename" required type="text"></b-form-input>
                            </b-form-group>
                            <b-form-group label="E-mail">
                                <b-form-input v-model="form.email" type="email"></b-form-input>
                            </b-form-group>
                            <b-form-group label="Locale">
                                <!--<b-form-input v-model="form.locale" type=></b-form-input>-->
                            </b-form-group>
                        </b-col>
                    </b-row>
                    <div slot="footer">
                        <b-button type="submit" size="sm" variant="primary"><i class="fa fa-dot-circle-o"></i> Submit</b-button>
                        <b-button type="reset" size="sm" variant="danger"><i class="fa fa-ban"></i> Reset</b-button>
                    </div>
                </b-card>
            </b-form>
        </b-container>
    </section>
</template>

<script>
    export default {
        name: 'settings',
        data() {
            return {
                show: true
            };
        },
        computed: {
            form() {
                return this.$store.getters.generalSettings
            }
        },
        methods: {
            onSubmit(evt) {
                evt.preventDefault();
                console.log(this)
                this.$store.dispatch('setSettings')
            },
            onReset(evt) {
                evt.preventDefault();
                // Reset our form values
                this.$store.getters.generalSettings;
                // Trick to reset/clear native browser form validation state
                this.show = false;
                this.$nextTick(() => { this.show = true });
            }
        },
        mounted() {
            this.$store.dispatch('grabConfig');
        }
    }
</script>
