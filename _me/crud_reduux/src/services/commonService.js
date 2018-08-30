import http from './http'

const getStates = async () => {
  return await http.get('/states').then(res => {
    return res.data
  })
}

const getCities = async stateId =>
  await http.get(`/cities/${stateId}`).then(res => res.data)

export default {
  getStates,
  getCities
}
