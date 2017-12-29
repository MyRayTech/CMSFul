<template>
    <b-container id="login">
        <b-row>
            <b-col md="6" offset="3">
                <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                    <b-form-group id="username_group"
                                  label="Username:"
                                  label-for="username">
                        <b-form-input id="username"
                                      type="text"
                                      v-model="form.username"
                                      required>
                        </b-form-input>
                    </b-form-group>
                    <b-form-group id="password_group"
                                  label="Password:"
                                  label-for="password">
                        <b-form-input id="password"
                                      type="password"
                                      v-model="form.password"
                                      required>
                        </b-form-input>
                    </b-form-group>
                    <b-button type="submit" variant="primary">Submit</b-button>
                    <b-button type="reset" variant="danger">Reset</b-button>
                </b-form>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    import Axios from 'axios'
    import qs from 'qs'
    
    export default {
        name: 'login',
        data() {
          return {
              form: {
                  username: '',
                  password: ''
              },
              errors: [],
              show: true
          }  
        },
        methods: {
            onSubmit() {
                Axios.post('/app_dev.php/api/login_check', qs.stringify({
                    _username: this.form.username,
                    _password: this.form.password
                }), {
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                })
                .then((response) => {
                    this.$store.dispatch('SET_TOKEN', response.data.token)
                    this.$emit('tokenIsSet')
                })
                .catch((err) => {
                        this.errors.push(err)
                })
            },
            onReset(evt) {
                evt.preventDefault();
                /* Reset our form values */
                this.form.username = '';
                this.form.password = '';
                /* Trick to reset/clear native browser form validation state */
                this.show = false;
                this.$nextTick(() => { this.show = true });
            }
        }
    }
</script>