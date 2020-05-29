<template>
  <div class="container">
    <h1 class="u-center">Black Forge</h1>
    <div class="tile is-vertical">
      <div class="tile">
        <div class="tile is-parent is-vertical is-4">
          <aside class="tile tile--no-grow is-child buttons box">
            <Menu />
          </aside>
          <aside class="tile tile--no-grow is-child box">
            <Achievements />
          </aside>
        </div>
        <div class="tile is-parent is-vertical is-8">
          <section class="tile tile--no-grow is-child box">
            <Status />
          </section>
          <section class="tile is-child box">
            <Inventory />
          </section>
        </div>
      </div>
      <div class="tile is-parent">
        <section class="tile is-child box">
          <Crafting />
        </section>
      </div>
    </div>
  </div>
</template>

<script>
import Achievements from './Achievements'
import Crafting from './Crafting'
import Inventory from './Inventory'
import Menu from './Menu'
import Status from './Status'

export default {
  name: 'App',
  components: {
    Achievements,
    Crafting,
    Inventory,
    Menu,
    Status,
  },
}
</script>

<style lang="scss">
  /* empty */
</style>
