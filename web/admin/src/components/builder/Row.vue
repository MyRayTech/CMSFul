<template>
    <b-row :id="identifier" :class="classes">
        <b-col md="12" class="rows controls text-center">
            Row {{id }}
            <i @click="editRow" class="fa fa-edit"></i> 
            <i @click="addRow" class="fa fa-plus"></i> 
            <i @click="deleteRow" class="fa fa-remove"></i>
        </b-col>
        <Column v-for="column in columns" :key="column.id" v-bind="column" @addColumn="addColumn"></Column>
    </b-row>
</template>

<script>
import Column from './Column.vue'

export default {
    name: 'builer-row',
    data() {
        return {
            
        };
    },
    props: ['id', 'identifier', 'classes', 'columns'],
    methods: {
        addRow: function() {
                this.$emit('addRow');
        },
        editRow: function() {

        },
        deleteRow: function() {

        },
        addColumn: function() {
            this.columns.push({
                identifier:'',
                classes: '',
                size: 6
            })
        }
    },
    components: {
        Column: Column
    }
}    

</script>
