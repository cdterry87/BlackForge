import Api from './Api'

export default {
  getInventory () {
    return Api().get('inventory')
  }
}