<template v-if="hasError == true">
    <b-container fluid class="error">
        <b-row>
            <b-col md="12">
                <b-alert variant="danger" dismissible show>
                    <p>{{ message }}</p>
                </b-alert>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
export default {
    name: 'error',
    data() {
        return {
            message: '',
            hasError: false
        };
    }
}
</script>