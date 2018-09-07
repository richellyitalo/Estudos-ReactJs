import axios from 'axios'

import store from '../store'
import { setLoading, setErrors } from '../store/actions/commonActions'

const http = axios.create({
  baseURL: 'http://laravel-api.richellyitalo.com/api/'
})

http.interceptors.request.use(
  config => {
    store.dispatch(setLoading())

    store.dispatch(setErrors())

    return config
  },
  error => {
    store.dispatch(setLoading())

    return Promise.reject(error)
  }
)

// Add a response interceptor
http.interceptors.response.use(
  response => {
    store.dispatch(setLoading(false))

    return response
  },
  error => {
    const { response } = error
    store.dispatch(setLoading(false))
    
    if (!response) {
      store.dispatch(setErrors(['Servidor não respondeu']))

      return Promise.reject(error)
    }

    if (response.status > 400) {
      // store.dispatch(setErrors(error.response.data))
      const message = response.data.message ? response.data.message : response.statusText

      store.dispatch(setErrors([message]))
    }

    return Promise.reject(error)
  }
)

export default http
