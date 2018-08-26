import React from 'react'
import { Redirect, Route } from 'react-router-dom'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

import AppRoute from './AppRoute'

const PrivateRoute = ({ auth, ...rest }) =>
  auth.isAuthenticated === true ? (
    <AppRoute {...rest} />
  ) : (
    <Redirect to="/login" />
  )

PrivateRoute.propTypes = {
  auth: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  auth: state.auth
})

export default connect(mapStateToProps)(PrivateRoute)
