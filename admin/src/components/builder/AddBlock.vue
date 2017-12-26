<template>
    <Modal identifier="identifier"  reference="reference" title="title"  content="content"/>
</template>

<script>
  import Modal from '../Modal.vue'  
    
  export default {
          name: 'builder-block-add',
          props: [
              block
          ],
          computed: {
              identifier: function() {
                console.log(this.block.type);
                return 'mymodal';
              },
              reference: function() {
                  return 'my-modal';
              },
              title: function() {
                  return 'my first modal';
              },
              content: function() {
                  return 'testing modal';
              }
          },
          components: {
              Modal
          }
  }  
</script>