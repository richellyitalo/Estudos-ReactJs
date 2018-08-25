import React from 'react'
import Nav from '../elements/nav/Nav'

class LayoutPanel extends React.Component {
  render() {
    return (
      <React.Fragment>
        <Nav />
        {this.props.children}
      </React.Fragment>
    )
  }
}

export default LayoutPanel
