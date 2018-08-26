import React from 'react'
import Routes from './routes/Routes'
import jwt_decode from 'jwt-decode'

import { setUser } from './store/actions/authAction'
import store from './store'
import { setAuthToken } from './helpers'

import './App.css'

// Verificação se o usuário já está logado
if (localStorage.token) {
  // Define o token no Storage do browser
  setAuthToken(localStorage.token)
  // Define o usuário no State
  const decoded = jwt_decode(localStorage.token)
  store.dispatch(setUser(decoded))
  // Redireciona
  // window.location.href = '/'
}

const App = () => (
  <div className="container">
    <Routes />
  </div>
)

export default App
