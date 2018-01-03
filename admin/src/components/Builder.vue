<template>
    <section id="builder">
        <Container v-for="(container, index) in page" :key="index" v-bind="container" @addContainer="addContainer" @deleteContainer="deleteContainer(index)"></Container>
    </section>
</template>

<script>
    import Container from './builder/Container.vue'
    
    export default {
        name: 'builder',
        data() {
            return {
                
            };
        },
        props: ['page'],
        methods: {
            addContainer: function() {
                this.containers.push({
                    type: 'container',
                    identifier: '',
                    classes: '',
                    rows: [
                        
                    ]
                });
            },
            editContainer: function() {
                
            },
            deleteContainer: function(index) {
                this.containers.splice(index, 1);
            }
        },
        created() {},
        components: {
            Container: Container
        }
    }
</script>
    