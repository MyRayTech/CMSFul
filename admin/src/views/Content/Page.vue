<template>
    <section id="Page">
        <b-container fluid>
            <b-row>
                <b-col md="12">
                    <h1>Page</h1>
                </b-col>
            </b-row>
        </b-container>
        <Builder/>
    </section>
</template>

<script>
    import Builder from '../../components/Builder.vue'
    
    export default {
        name: 'page',
        components: {
            Builder: Builder
        }
    }
</script>