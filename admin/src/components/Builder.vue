<template>
    <section id="builder">
        <Container v-for="(container, index) in containers" :key="container.id" v-bind="container" @addContainer="addContainer" @deleteContainer="deleteContainer(index)"></Container>
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
                        id: 1,
                        identifier: "test_1",
                        classes: "test2",
                        rows: [
                            {
                                id:1,
                                identifier:'',
                                classes: '',
                                columns: [{
                                        id: 1,
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
                                        id:2,
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
                                            }
                                        ]
                                    }
                                ]
                            },
                            {
                                id:2,
                                identifier:'',
                                classes: '',
                                columns: [{
                                        id:1,
                                        identifier:'',
                                        classes: '',
                                        size: 3
                                    },
                                    {
                                        id:2,
                                        identifier:'',
                                        classes: '',
                                        size: 9
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        id: 2,
                        identifier: "test_3",
                        classes: "test4",
                        rows: [
                            {
                                id:1,
                                identifier:'',
                                classes: '',
                                columns: [{
                                        id:10,
                                        identifier:'',
                                        classes: '',
                                        size: 9
                                    },
                                    {
                                        id:2,
                                        identifier:'',
                                        classes: '',
                                        size: 3
                                    }
                                ]
                            },
                            {
                                id:2,
                                identifier:'',
                                classes: '',
                                columns: [{
                                        id:1,
                                        identifier:'',
                                        classes: '',
                                        size: 6
                                    },
                                    {
                                        id:2,
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
                    identifier: '',
                    classes: '',
                    rows: [
                        {
                            identifier:'',
                            classes: '',
                            columns: [{
                                    
                                    identifier:'',
                                    classes: '',
                                    size: 6
                                }
                            ]
                        }
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
    