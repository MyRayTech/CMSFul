<template>
  <b-container fluid>
      <b-row>
          <b-col sm="3">Hello World</b-col>
      </b-row>
  </b-container>
</template>

<script>
    
    
    export default {
      name: 'dashboard',
      data() {
          return {
              posts: [],
              errors: []
          }
      }
    }
    
    /*created() {
        axios.get('')
                .then(response => {
                    this.
                })
                .catch ( e => {
                    
                })
    }*/
</script>
