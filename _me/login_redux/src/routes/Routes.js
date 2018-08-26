import React, { Fragment } from 'react'
import { BrowserRouter as Router, Switch } from 'react-router-dom'
import { Provider } from 'react-redux'

import Painel from '../components/dashboard/Painel'
import Login from '../components/auth/Login'
import AppRoute from './AppRoute'
import LayoutSite from '../components/layout/LayoutSite'
import PrivateRoute from './PrivateRoute'
import store from '../store'
// import LayoutPanel from '../components/layout/LayoutPanel'
// import layoutDefault from './components/layout/hoc/layoutDefault'

export default () => (
  <Provider store={store}>
    <Router>
      <Fragment>
        <Switch>
          <PrivateRoute exact path="/" component={Painel} />
          <AppRoute exact layout={LayoutSite} path="/login" component={Login} />
        </Switch>
      </Fragment>
    </Router>
  </Provider>
)
