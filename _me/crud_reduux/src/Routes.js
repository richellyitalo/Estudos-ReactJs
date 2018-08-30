import React, { Component } from 'react'
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'

import LayoutMain from './elements/layout/LayoutMain'
import ClientList from './components/clients/ClientList'
import ClientAdd from './components/clients/ClientAdd'

class Routes extends Component {
  render() {
    return (
      <Router>
        <LayoutMain>
          <Switch>
            <Route exact path="/new" component={ClientAdd} />
            <Route exact path="/:page?" component={ClientList} />
          </Switch>
        </LayoutMain>
      </Router>
    )
  }
}

export default Routes
