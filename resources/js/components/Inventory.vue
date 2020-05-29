<template>
  <div id="inventory">
    <h2 class="u-center">Inventory</h2>
    <div class="columns is-multiline">
      <div 
        v-for="(item, index) in inventory"
        :key="index"
        class="column is-one-third"
      >
        <div class="box notification is-dark has-text-centered">
          <h3>{{ item.name }}</h3>
          <p>{{ item.quantity }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import InventoryService from '../services/InventoryService'
  
  export default {
    name: 'Inventory',
    data() {
      return {
        inventory: []
      }
    },
    methods: {
      async getInventory() {
        const response = await InventoryService.getInventory()
        this.inventory = response.data
      }
    },
    mounted () {
      this.getInventory()
    }
  }
</script>
