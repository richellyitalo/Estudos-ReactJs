import React from 'react'
import Nav from '../commons/Nav'
import Alert from '../commons/Alert'

const LayoutMain = props => (
  <div className="container">
    <Nav />
    <Alert />
    {props.children}
  </div>
)

export default LayoutMain