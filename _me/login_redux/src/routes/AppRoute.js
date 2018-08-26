import React, { Fragment } from 'react'
import { Route } from 'react-router-dom'

import LayoutPanel from '../components/layout/LayoutPanel'

const AppRoute = ({ component: Component, layout: Layout, ...rest }) => {
  if (Layout === undefined) {
    Layout = LayoutPanel
    // Criando Layout on the fly
    // Layout = props => <Fragment>{props.children}</Fragment>
  }

  return (
    <Route
      {...rest}
      render={props => (
        <Layout>
          <Component {...props} />
        </Layout>
      )}
    />
  )
}

export default AppRoute
