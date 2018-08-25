import React from 'react'
import { Route } from 'react-router-dom'
import LayoutPanel from '../../layout/LayoutPanel';

const AppRoute = ({ component: Component, layout: Layout, ...rest }) => {
  if (Layout === undefined) {
    Layout = LayoutPanel
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