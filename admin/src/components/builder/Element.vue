<template>
    <component :is="computedView" :block="block"></component>
</template>

<script>
    import BlockRow from './Row'
    import BlockHtml from './blocks/Html'
    import BlockImage from './blocks/Image'
    import BlockCarousel from './blocks/Carousel'
    
    export default {
        name: 'builder-element',
        props:['block'],
        data() {
            return {
                types: {
                    
                    html: BlockHtml,
                    image: BlockImage,
                    carousel: BlockCarousel
                }
            };
        },
        computed: {
            computedView: function() {
                return this.types[this.block.type];
            }
        },
        components: {
            BlockHtml,
            BlockImage,
            BlockCarousel
        }
    }
</script>