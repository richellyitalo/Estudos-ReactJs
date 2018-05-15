import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom'

import Home from './components/Home/home'
import Layout from './hoc/Layout/layout'

class Router extends Component {
  render() {
    return (
      <Layout>
        <Switch>
          <Route path="/" exact component={Home} />
        </Switch>
      </Layout>
    );
  }
}

export default Router;