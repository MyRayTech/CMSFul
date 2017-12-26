<template>
    <section id="builder">
        <Container v-for="(container, index) in containers" :key="index" v-bind="container" @addContainer="addContainer" @deleteContainer="deleteContainer(index)"></Container>
    </section>
</template>

<script>
    import Container from './builder/Container.vue'
    
    export default {
        name: 'builder',
        data() {
            return {
                content: 'Testing',
                containers: [
                    {
                        type: 'container',
                        identifier: "test_1",
                        classes: "test2",
                        rows: [
                            {
                                type: 'row',
                                identifier:'',
                                classes: '',
                                columns: [{
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 6,
                                        elements: [
                                            {
                                                type: 'html',
                                                content: '<div>test</div>'
                                            },
                                            {
                                                type: 'image',
                                                url: '/assets/images/cmsful_bg.png',
                                                height: 300,
                                                width: 300
                                            }
                                        ]
                                    },
                                    {
                                        type: 'row',
                                        identifier:'',
                                        classes: '',
                                        size: 6,
                                        elements: [
                                            {
                                                type: 'carousel',
                                                slides: [
                                                    {
                                                        content: 'Test'
                                                    }
                                                ]
                                            },
                                            {
                                                type: 'row',
                                                children: [
                                                    {
                                                        
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            },
                            {
                                type: 'row',
                                identifier:'',
                                classes: '',
                                columns: [{
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 3
                                    },
                                    {
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 9
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        type: 'container',
                        identifier: "test_3",
                        classes: "test4",
                        rows: [
                            {
                                type: 'row',
                                identifier:'',
                                classes: '',
                                columns: [{
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 9
                                    },
                                    {
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 3
                                    }
                                ]
                            },
                            {
                                type: 'row',
                                identifier:'',
                                classes: '',
                                columns: [{
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 6
                                    },
                                    {
                                        type: 'column',
                                        identifier:'',
                                        classes: '',
                                        size: 6
                                    }
                                ]
                            }
                        ]
                    } 
                ]
            };
        },
        props: [],
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
    