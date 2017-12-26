<template>
    <b-row :id="identifier" :class="classes">
        <b-col md="12" class="rows controls text-center">
            Row
            <i @click="editRow" class="fa fa-edit"></i> 
            <i @click="addRow" class="fa fa-plus"></i> 
            <i @click="deleteRow" class="fa fa-remove"></i>
        </b-col>
        <Column v-for="(column, index) in columns" :key="column.id" v-bind="column" @addColumn="addColumn" @deleteColumn="deleteColumn(index)"></Column>
    </b-row>
</template>

<script>
    import Column from './Column.vue';

    export default {
        name: 'builer-row',
        data() {
            return {

            };
        },
        props: ['identifier', 'classes', 'columns'],
        methods: {
            addRow: function () {
                this.$emit('addRow');
            },
            editRow: function () {
                this.$emit('editRow');
            },
            deleteRow: function () {
                this.$emit('deleteRow');
            },
            addColumn: function () {
                this.columns.push({
                    identifier: '',
                    classes: '',
                    size: 6
                })
            },
            editColumn: function () {

            },
            deleteColumn: function (index) {
                this.columns.splice(index, 1);
            }
        },
        components: {
            Column: Column
        }
    }

</script>
