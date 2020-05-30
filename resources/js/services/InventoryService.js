import Api from './Api'

export default {
  getOre () {
    return Api().get('ore')
  },
  getGems () {
    return Api().get('gems')
  },
  getItems () {
    return Api().get('items')
  }
}