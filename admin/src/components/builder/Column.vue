<template>
    <b-col :md="size" :id="id" :class="classes">
        <b-row>
            <b-col md="12" class="column controls text-center">
                Column {{ id }}
                <i @click="editColumn" class="fa fa-edit"></i> 
                <i @click="addColumn" class="fa fa-plus"></i> 
                <i @click="deleteColumn" class="fa fa-remove"></i>
            </b-col>
            <BuilderElement v-for="block in elements" :key="block.id" :block="block" />
        </b-row>
        
    </b-col>
</template>

<script>
    import BuilderElement from './Element.vue';
    
    export default {
        name: 'builder-column',
        data() {
            return {

            };
        },
        props: ['id', 'identifier', 'classes', 'size', 'elements'],
        methods: {
            editColumn: function () {

            },
            addColumn: function () {
                this.$emit('addColumn');
            },
            deleteColumn: function () {
                this.$emit('deleteColumn');
            }
        },
        components: {
            BuilderElement: BuilderElement
        }
    }
</script>