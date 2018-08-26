import { setLoading } from './commonAction'
import { SET_USER } from '../types'
import { http, setAuthToken } from '../../helpers'
import jwt_decode from 'jwt-decode'

const loadStart = dispatch => dispatch(setLoading(true))
const loadEnd = dispatch => dispatch(setLoading(false))

export const loginUser = userData => dispatch => {
  // loadStart(dispatch)

  http
    .post('/auth/login', userData)
    .then(({ data: { token } }) => {
      // Salvo o token na Sessão do browser
      setAuthToken(token) // setando storage e headers
      // localStorage.setItem('token', token)
      // Decodifica o token para extrair informações
      // entre ela o exp: que é a data de expiração
      dispatch(setUser(jwt_decode(token)))
    })
    .catch(err => {
      alert(err.message)
    })
    // .finally(() => {
    //   loadEnd(dispatch)
    // })
}

export const setUser = decoded => ({
  type: SET_USER,
  payload: decoded
})

export const logoutUser = () => dispatch => {
  // loadStart(dispatch)

  http
    .get(`/auth/logout?token=${localStorage.token}`)
    .then(res => {
      // Destroi o token do app
      setAuthToken(null) // setando storage e headers
      alert(res.data)
      // Remove o token do State
      dispatch(setUser(null))
    })
    .catch(err => {
      alert(err.message)
    })
    // .finally(() => {
    //   loadEnd(dispatch)
    // })
}
