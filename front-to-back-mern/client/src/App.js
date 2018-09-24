import React, { Component } from 'react'
import { BrowserRouter as Router, Route } from 'react-router-dom'
import { Provider } from 'react-redux'
import jwtDecode from 'jwt-decode'

// Components
import Navbar from './components/layout/Navbar'
import Landing from './components/layout/Landing'
import Footer from './components/layout/Footer'
import Register from './components/auth/Register'
import Login from './components/auth/Login'

// Load store e actions
import store from './store'
import { setCurrentUser, logoutUser } from './actions/authActions'

// Utilidades
import setAuthToken from './utils/setAuthToken'

// Estilos
import './App.css'

// Lógica no boot
if (localStorage.jwtToken) {
  const token = localStorage.jwtToken
  // Define os headers
  setAuthToken(token)
  // Decodifica o token
  const decoded = jwtDecode(token)
  // Define os dados do usuario
  store.dispatch(setCurrentUser(decoded))
  // Redirecionando se o token expirou
  const currentTime = Date.now() / 1000;
  if (decoded.exp < currentTime) {
    store.dispatch(logoutUser());
    // TODO: limpar perfil atual

    // Redireciona para login
    window.location.href = '/login'
  }
}

class App extends Component {
  render() {
    return (
      <Provider store={store}>
        <Router>
          <div className="App">
            <Navbar />
            {/* ~ Home */}
            <Route exact path="/" component={Landing} />
            <div className="container">
              {/* ~ Register */}
              <Route exact path="/register" component={Register} />
              {/* ~ Login */}
              <Route exact path="/login" component={Login} />
            </div>
            <Footer />
          </div>
        </Router>
      </Provider>
    )
  }
}

export default App
