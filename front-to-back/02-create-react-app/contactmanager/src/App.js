import React, { Component } from 'react'
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'

import Contacts from './components/contacts/Contacts'
import AddContact from './components/contacts/AddContact'
import EditContact from './components/contacts/EditContact'
import NotFound from './components/pages/NotFound';
import Header from './components/layout/Header'
import About from './components/pages/About'
import { Provider } from './context'

import 'bootstrap/dist/css/bootstrap.min.css'
import './App.css'

class App extends Component {
  render() {
    return (
      <Provider>
        <Router>
          <div className="App">
            <Header branding="Gerenciador de Contatos" />
            <div className="container">
              <Switch>
                <Route exact path="/" component={Contacts} />
                <Route exact path="/sobre" component={About} />
                <Route exact path="/novo-contato" component={AddContact} />
                <Route exact path="/edicao-contato/:id" component={EditContact} />
                <Route component={NotFound} />
              </Switch>
            </div>
          </div>
        </Router>
      </Provider>
    )
  }
}

export default App
