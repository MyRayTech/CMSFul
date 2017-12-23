<template>
    <b-col md="12">
        <i class="fa fa-picture-o fa-2x"></i>&nbsp;
        <i class="fa fa-edit"></i>
        <i class="fa fa-plus"></i>
        <i class="fa fa-remove"></i><br />
        <img :src="block.url" :alt="block.alt" style="height: 100px;"/>
    </b-col>
</template>

<script>
    export default {
        name: "builder-block-image",
        props: ['block']
    }
</script>