<template>
    <section id="builder">
        <Container v-for="(container, index) in content" :key="index" v-bind="container" @addContainer="addContainer" @deleteContainer="deleteContainer(index)"></Container>
    </section>
</template>

<script>
    import Container from './builder/Container.vue'
    
    export default {
        name: 'builder',
        props: ['page'],
        computed: {
            content() {
                /*if(this.page !== '')
                {
                    return this.page
                }*/
                return [
                    {
                        type: 'container',
                        identifier: '',
                        classes: '',
                        rows: [
                            {
                                type: 'row',
                                identifier: '',
                                classes: '',
                                columns: [
                                    {
                                        type: 'column',
                                        size: '6',
                                        identifier: '',
                                        classes: '',
                                        elements: [
                                            {
                                                type: 'html',
                                                content: 'tester'
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    }
                ]
            }
        },
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
        components: {
            Container: Container
        }
    }
</script>
    