import axios from 'axios'
import jwtDecode from 'jwt-decode'

// Types
import { GET_ERRORS, SET_CURRENT_USER } from './types'

// Utils
import setAuthToken from '../utils/setAuthToken'

export const registerUser = (userData, history) => dispatch => {
  axios
    .post('/api/users/register', userData)
    .then(() => history.push('/login'))
    .catch(err => dispatch({ type: GET_ERRORS, payload: err.response.data }))
}

export const loginUser = userData => dispatch => {
  axios
    .post('/api/users/login', userData)
    .then(res => {
      // Get token
      const { token } = res.data
      // Salva no storage
      localStorage.setItem('jwtToken', token)
      // Define o token no header
      setAuthToken(token)
      // Decodifica o token
      const decoded = jwtDecode(token)
      // Define os dados e usuario e autenticacao
      dispatch(setCurrentUser(decoded))
    })
    .catch(err => dispatch({ type: GET_ERRORS, payload: err.response.data }))
}

export const setCurrentUser = decoded => {
  return {
    type: SET_CURRENT_USER,
    payload: decoded
  }
}

export const logoutUser = () => dispatch  => {
  // Remove o token do storage
  localStorage.removeItem('jwtToken')
  // Remove o token do header
  setAuthToken(false)
  // Remove dos dados do redux
  dispatch(setCurrentUser({}))
}
