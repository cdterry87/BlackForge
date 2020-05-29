<template>
  <div id="status">
    <h2 class="u-center">Status</h2>
    <div class="columns">
      <div class="column is-one-third">
        <h3 class="u-center">Gold</h3>
        <p class="u-center">{{ status.gold }}</p>
      </div>
      <div class="column is-one-third">
        <h3 class="u-center">Sold</h3>
        <p class="u-center">{{ status.sold }}</p>
      </div>
      <div class="column is-one-third">
        <h3 class="u-center">Level</h3>
        <p class="u-center">{{ status.level }}</p>
      </div>
    </div>
  </div>
</template>

<script>
  import StatusService from '../services/StatusService'
  
  export default {
    name: 'Status',
    data() {
      return {
        status: []
      }
    },
    methods: {
      async getStatus() {
        const response = await StatusService.getStatus()
        this.status = response.data
      }
    },
    mounted () {
      this.getStatus()
    },
  }
</script>
