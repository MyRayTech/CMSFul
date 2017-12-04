<template>
    <b-container :id="identifier" :class="classes">
        <b-row>
            <b-col md="12" class="container controls text-center">
                Container {{ id }}
                <i @click="editContainer" class="fa fa-edit"></i> 
                <i @click="addContainer" class="fa fa-plus"></i> 
                <i @click="deleteContainer" class="fa fa-remove"></i>
            </b-col>
        </b-row>
        <Row v-for="row in rows" :key="row.id" v-bind="row" @addRow="addRow"></Row>
    </b-container>
</template>

<script>
    import Row from './Row.vue'
    
    export default {
        name: 'builder-container',
        props: ['id','identifier', 'classes', 'rows'],
        data() {
            return {
                
            };
        },
        methods: {
            addContainer: function() {
                this.$emit('addContainer');
            },
            editContainer: function() {
                
            },
            deleteContainer: function() {
                
            },
            addRow: function() {
                this.rows.push({
                    identifier: '',
                    classes: '',
                    columns: [
                        {
                            identifier: '',
                            classes: '',
                            size: 6
                        }
                    ]
                });
            },
            editRow: function() {
                
            },
            deleteRow: function() {
                
            }
        },
        created() {
            
        },
        components: {
            Row: Row
        }
    }
</script>
    