import Api from './Api'

export default {
  getAchievements () {
    return Api().get('achievements')
  }
}