<template>
    <b-col :md="size" :id="identifier" :class="classes">
        <b-row>
            <b-col md="12" class="column controls text-center">
                Column {{ id }}
                <i @click="editColumn" class="fa fa-edit"></i> 
                <i @click="addColumn" class="fa fa-plus"></i> 
                <i @click="deleteColumn" class="fa fa-remove"></i>
            </b-col>
        </b-row>
    </b-col>
</template>

<script>
    export default {
        name: 'builder-column',
        data() {
            return {

            };
        },
        props: ['id', 'identifier', 'classes', 'size'],
        methods: {
            editColumn: function () {

            },
            addColumn: function () {
                this.$emit('addColumn');
            },
            deleteColumn: function () {
                this.$emit('deleteColumn');
            }
        }
    }
</script>