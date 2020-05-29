import Api from './Api'

export default {
  getCrafting () {
    return Api().get('crafting')
  }
}