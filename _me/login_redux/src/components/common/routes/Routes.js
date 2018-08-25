import React, { Fragment } from 'react'
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom'
import AppRoute from './AppRoute'
import Painel from '../../dashboard/Painel'
import Login from '../../auth/Login'
import LayoutSite from '../../layout/LayoutSite'
import LayoutPanel from '../../layout/LayoutPanel'
import { Provider } from 'react-redux'
import store from '../../../store'
// import layoutDefault from './components/layout/hoc/layoutDefault'

const Routes = () => (
  <Provider store={store}>
    <Router>
      <React.Fragment>
        <Switch>
          <AppRoute exact path="/" component={Painel} />
          <AppRoute exact layout={LayoutSite} path="/login" component={Login} />
        </Switch>
      </React.Fragment>
    </Router>
  </Provider>
)

export default Routes
