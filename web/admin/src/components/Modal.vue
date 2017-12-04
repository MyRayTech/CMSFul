<template>
    <b-modal :ref="reference" :id="identifier" :title="title">
        <div v-html="content"></div>
    </b-modal>
</template>

<script>
    export default {
            name: 'modal',
            props: ['identifier', 'reference', 'title', 'content' ]
    }
</script>