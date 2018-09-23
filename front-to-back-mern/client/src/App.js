import React, { Component } from "react"
import { BrowserRouter as Router, Route } from "react-router-dom"
import { Provider } from 'react-redux'

// Components
import Navbar from "./components/layout/Navbar"
import Landing from "./components/layout/Landing"
import Footer from "./components/layout/Footer"
import Register from "./components/auth/Register"
import Login from "./components/auth/Login"

// Load store 
import store from './store'

// Estilos
import "./App.css"

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
