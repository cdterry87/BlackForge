<template>
  <div id="crafting">
    <h2 class="u-center">Crafting</h2>
    <div class="columns is-multiline">
      <div 
        v-for="(item, index) in crafting"
        :key="index"
        class="column is-one-third"
      >
        <div class="box notification is-dark has-text-centered">
          <h3>{{ item.name }}</h3>
          <p>{{ item.timestamp }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import CraftingService from '../services/CraftingService'
  
  export default {
    name: 'Inventory',
    data() {
      return {
        crafting: []
      }
    },
    methods: {
      async getCrafting() {
        const response = await CraftingService.getCrafting()
        this.crafting = response.data
      }
    },
    mounted () {
      this.getCrafting()
    }
  }
</script>
