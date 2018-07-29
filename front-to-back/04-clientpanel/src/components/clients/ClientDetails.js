import React, { Component } from 'react'
import { Link } from 'react-router-dom'
import PropTypes from 'prop-types'
import { compose } from 'redux'
import { connect } from 'react-redux'
import { firestoreConnect } from 'react-redux-firebase'
import Spinner from '../layout/Spinner'
import classnames from 'classnames'

class ClientDetails extends Component {
  state = {
    showBalanceUpdate: false,
  }
  render() {
    return (

    )
  }
}

export default ClientDetails
