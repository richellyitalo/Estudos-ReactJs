import React from 'react'

import Nav from '../elements/nav/Nav'
import Loading from '../elements/loading/Loading'

class LayoutPanel extends React.Component {
  render() {
    return (
      <React.Fragment>
        <Nav />
        <Loading />
        {this.props.children}
      </React.Fragment>
    )
  }
}

export default LayoutPanel
