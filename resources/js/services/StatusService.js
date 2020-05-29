import Api from './Api'

export default {
  getStatus () {
    return Api().get('status')
  }
}