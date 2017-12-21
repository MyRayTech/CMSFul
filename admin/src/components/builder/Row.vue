<template>
    <b-row :id="identifier" :class="classes">
        <b-col md="12" class="rows controls text-center">
            Row {{ id }}
            <i @click="editRow" class="fa fa-edit"></i> 
            <i @click="addRow" class="fa fa-plus"></i> 
            <i @click="deleteRow" class="fa fa-remove"></i>
        </b-col>
        <Column v-for="(column, index) in columns" :key="column.id" v-bind="column" @addColumn="addColumn" @deleteColumn="deleteColumn(index)"></Column>
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
        addRow() {
                this.$emit('addRow');
        },
        editRow() {

        },
        deleteRow() {
                this.$emit('deleteRow');
        },
        addColumn() {
            this.columns.push({
                identifier:'',
                classes: '',
                size: 6
            })
        },
        editColumn() {
            
        },
        deleteColumn(index) {
            this.columns.splice(index, 1);
        }
    },
    components: {
        Column: Column
    }
}    

</script>
