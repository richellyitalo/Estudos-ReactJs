import React from 'react'

import Nav from '../../elements/Nav'

const layoutDefault = WrappedComponent => {
  class LayoutDefault extends React.Component {
    render() {
      return (
        <React.Fragment>
          <Nav />
          <WrappedComponent {...this.props} />
        </React.Fragment>
      )
    }
  }

  return LayoutDefault
}

export default layoutDefault
