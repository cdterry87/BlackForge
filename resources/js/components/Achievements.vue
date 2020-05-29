<template>
  <div id="achievements">
    <h2 class="u-center">Achievements</h2>
    <div class="panel">
      <div
        v-for="(achievement, index) in achievements"
        :key="index"
        class="panel-block"
        :title="achievement.description"
      >
        <span class="panel-icon">
          <i class="fa-star" :class="achievementCompleteClass(achievement.complete)" aria-hidden="true"></i>
        </span>
        {{ achievement.name }}
      </div>
    </div>
  </div>
</template>

<script>
  import AchievementService from '../services/AchievementService'
  
  export default {
    name: 'Achievements',
    data() {
      return {
        achievements: []
      }
    },
    methods: {
      async getAchievements() {
        const response = await AchievementService.getAchievements()
        this.achievements = response.data
      },
      achievementCompleteClass(complete) {
        return complete ? 'fas' : 'far'
      }
    },
    mounted () {
      this.getAchievements()
    }
  }
</script>
