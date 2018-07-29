import React, { Component } from 'react'
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom'
import { Provider } from 'react-redux'

import './App.css'
import AppNavbar from './components/layout/AppNavbar'
import Dashboard from './components/layout/Dashboard'
import store from './store'
import AddClient from './components/clients/AddClient'
import ClientDetails from './components/clients/ClientDetails'

class App extends Component {
  render() {
    return (
      <Provider store={store}>
        <Router>
          <div className="App">
            <AppNavbar />
            <div className="container">
              <Switch>
                <Route exact path="/" component={Dashboard} />
                <Route exact path="/add" component={AddClient} />
                <Route exact path="/cliente/:id" component={ClientDetails} />
              </Switch>
            </div>
          </div>
        </Router>
      </Provider>
    )
  }
}

export default App
