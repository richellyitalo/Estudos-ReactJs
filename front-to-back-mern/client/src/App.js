import React, { Component } from 'react'
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'
import { Provider } from 'react-redux'
import jwtDecode from 'jwt-decode'

// Components
import Navbar from './components/layout/Navbar'
import Landing from './components/layout/Landing'
import Footer from './components/layout/Footer'
import Register from './components/auth/Register'
import Login from './components/auth/Login'
import Dashboard from './components/dashboard/Dashboard'
import PrivateRoute from './components/common/PrivateRoute'
import CreateProfile from './components/create-profile/CreateProfile'
import EditProfile from './components/edit-profile/EditProfile'
import AddExperience from './components/add-credentials/AddExperience'
import AddEducation from './components/add-credentials/AddEducation'
import Profiles from './components/profiles/Profiles'
import Profile from './components/profile/Profile'
import NotFound from './components/not-found/NotFound'
import Posts from './components/posts/Posts'
import Post from './components/post/Post'

// Load store e actions
import store from './store'
import { setCurrentUser, logoutUser } from './actions/authActions'
import { clearCurrentProfile } from './actions/profileActions'

// Utilidades
import setAuthToken from './utils/setAuthToken'

// Estilos
import './App.css'

// Lógica de autenticação no boot
if (localStorage.jwtToken) {
  const token = localStorage.jwtToken
  // Define os headers
  setAuthToken(token)
  // Decodifica o token
  const decoded = jwtDecode(token)
  // Define os dados do usuario
  store.dispatch(setCurrentUser(decoded))
  // Redirecionando se o token expirou
  const currentTime = Date.now() / 1000
  if (decoded.exp < currentTime) {
    store.dispatch(logoutUser())
    // Limpar perfil atual
    store.dispatch(clearCurrentProfile())
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
              {/* ~ Profiles*/}
              <Route exact path="/profiles" component={Profiles} />
              {/* ~ Dados do perfil*/}
              <Route exact path="/profile/:handle" component={Profile} />
              <Switch>
                {/* ~ Dashboard */}
                <PrivateRoute exact path="/dashboard" component={Dashboard} />
              </Switch>
              <Switch>
                {/* ~ Criação de perfil */}
                <PrivateRoute
                  exact
                  path="/create-profile"
                  component={CreateProfile}
                />
              </Switch>
              <Switch>
                {/* ~ Editar perfil */}
                <PrivateRoute
                  exact
                  path="/edit-profile"
                  component={EditProfile}
                />
              </Switch>
              <Switch>
                {/* ~ Adiciona experiência */}
                <PrivateRoute
                  exact
                  path="/add-experience"
                  component={AddExperience}
                />
              </Switch>
              <Switch>
                {/* ~ Adiciona educação */}
                <PrivateRoute
                  exact
                  path="/add-education"
                  component={AddEducation}
                />
              </Switch>
              <Switch>
                {/* ~ Post */}
                <PrivateRoute
                  exact
                  path="/post/:id"
                  component={Post}
                />
              </Switch>
              <Switch>
                {/* ~ Posts */}
                <PrivateRoute exact path="/feed" component={Posts} />
              </Switch>
              <Route exact path="/not-found" component={NotFound} />
            </div>
            <Footer />
          </div>
        </Router>
      </Provider>
    )
  }
}

export default App
