import axios from 'axios'
import store from './store'
import { setLoading } from './store/actions/commonAction'

export const isEmpty = value =>
  value === undefined ||
  value === null ||
  (typeof value === 'object' && Object.keys(value).length === 0) ||
  (typeof value === 'string' && value.trim().length === 0)

export const http = axios.create({
  baseURL: 'http://localhost:8000/api/'
})
// Envios
http.interceptors.request.use(
  config => {
    store.dispatch(setLoading(true))

    return config
  },
  error => Promise.reject(error)
)
// Recebimentos
http.interceptors.response.use(
  function(response) {
    store.dispatch(setLoading(false))
    // Do something with response data
    return response
  },
  function(error) {
    store.dispatch(setLoading(false))
    // Do something with response error
    return Promise.reject(error)
  }
)

export const setAuthToken = token => {
  if (token) {
    localStorage.setItem('token', token)

    http.defaults.headers.common['Authorization'] = 'Bearer ' + token
  } else {
    localStorage.removeItem('token')

    delete http.defaults.headers.common['Authentication']
  }
}
