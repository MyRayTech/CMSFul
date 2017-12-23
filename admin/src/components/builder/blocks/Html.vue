<template>
    <b-col md="12">
        <i class="fa fa-code fa-2x"></i>&nbsp;
        <i class="fa fa-edit"></i>
        <i class="fa fa-plus"></i>
        <i class="fa fa-remove"></i><br />
        <div v-html="block.content"></div>
    </b-col>
</template>

<script>
    export default {
        name: "builder-block-html",
        props: ['block']
    }
</script>
