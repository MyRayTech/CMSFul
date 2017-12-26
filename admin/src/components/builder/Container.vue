<template>
    <b-container :id="identifier" :class="classes">
        <b-row>
            <b-col md="12" class="container controls text-center">
                Container
                <i @click="editContainer" class="fa fa-edit"></i> 
                <i @click="addContainer" class="fa fa-plus"></i> 
                <i @click="deleteContainer" class="fa fa-remove"></i>
            </b-col>
        </b-row>
        <Row v-for="(row, index) in rows" :key="index" v-bind="row" @addRow="addRow" @deleteRow="deleteRow(index)"></Row>
    </b-container>
</template>

<script>
    import Row from './Row.vue'
    
    export default {
        name: 'builder-container',
        props: ['index', 'identifier', 'classes', 'rows'],
        data() {
            return {
              
            };
        },
        methods: {
            addContainer: function() {
                this.$emit('addContainer');
            },
            editContainer: function() {
                this.$emit('editContainer');
            },
            deleteContainer: function() {
                this.$emit('deleteContainer');
            },
            addRow: function() {
                this.rows.push({
                    identifier: '',
                    classes: '',
                    columns: [
                        
                    ]
                });
            },
            editRow: function() {
                
            },
            deleteRow: function(index) {
                this.rows.splice(index, 1);
            }
        },
        created() {
            
        },
        components: {
            Row:Row
        }
    }
</script>
    