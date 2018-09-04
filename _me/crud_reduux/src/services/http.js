import axios from 'axios'

import store from '../store'
import { setLoading, setErrors } from '../store/actions/commonActions'

const http = axios.create({
  baseURL: 'http://localhost:8000/api/'
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
    store.dispatch(setLoading(false))

    if (error.response.status === 400) {
      // store.dispatch(setErrors(error.response.data))
      store.dispatch(setErrors(['deu ruim', 'nome doido']))
    }

    return Promise.reject(error)
  }
)

export default http
