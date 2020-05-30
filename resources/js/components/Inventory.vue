<template>
  <div id="inventory" class="inventory">
    <h2 class="u-center">Inventory</h2>
    <section 
      v-if="ores.length > 0"
      class="inventory__section"
    >
      <h3>Ore</h3>
      <div class="columns is-multiline">
        <div 
          v-for="(ore, index) in ores"
          :key="index"
          class="column is-one-third"
        >
          <div class="box notification is-dark has-text-centered">
            <h4>{{ ore.name }}</h4>
            <p>0</p>
          </div>
        </div>
      </div>
    </section>

    <section 
      v-if="gems.length > 0"
      class="inventory__section"
    >
      <h3>Gems</h3>
      <div class="columns is-multiline">
        <div 
          v-for="(gem, index) in gems"
          :key="index"
          class="column is-one-third"
        >
          <div class="box notification is-dark has-text-centered">
            <h4>{{ gem.name }}</h4>
            <p>0</p>
          </div>
        </div>
      </div>
    </section>

    <section 
      v-if="items.length > 0"
      class="inventory__section"
    >
      <h3>Items</h3>
      <div class="columns is-multiline">
        <div 
          v-for="(item, index) in items"
          :key="index"
          class="column is-one-third"
        >
          <div class="box notification is-dark has-text-centered">
            <h3>{{ item.name }}</h3>
            <p>0</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
  import InventoryService from '../services/InventoryService'
  
  export default {
    name: 'Inventory',
    data() {
      return {
        ores: [],
        gems: [],
        items: []
      }
    },
    methods: {
      async getOre() {
        const response = await InventoryService.getOre()
        this.ores = response.data
      },
      async getGems() {
        const response = await InventoryService.getGems()
        this.gems = response.data
      },
      async getItems() {
        const response = await InventoryService.getItems()
        this.items = response.data
      }
    },
    mounted () {
      this.getOre()
      this.getGems()
      this.getItems()

      console.log('ore', this.ores)
      console.log('gems', this.gems)
      console.log('items', this.items)
    }
  }
</script>
