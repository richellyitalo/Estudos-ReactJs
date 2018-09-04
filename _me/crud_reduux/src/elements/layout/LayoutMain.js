import React from 'react'
import Nav from '../commons/Nav'
import Alert from '../commons/Alert'
import Errors from '../commons/Errors'
import Loading from '../commons/loading/Loading'

const LayoutMain = props => (
  <div className="container">
    <Nav />
    <Loading />
    <Alert />
    <Errors />
    {props.children}
  </div>
)

export default LayoutMain
