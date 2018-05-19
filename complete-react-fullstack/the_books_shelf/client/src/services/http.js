import axios from 'axios';

const http = axios.create({
  baseURL: 'http://192.168.1.70:7000/api'
  // headers: {'Auth': localStorage.getItem('token')}
});

const httpInterceptorRequestSuccess = (config) => {
  const token = localStorage.getItem('token')
  
  if (token != null) {
    config.headers.common['Auth'] = token
  }

  return config
}

http.interceptors.request.use(httpInterceptorRequestSuccess)

export default http;