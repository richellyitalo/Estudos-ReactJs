import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

import { clearAlert } from '../../store/actions/commonActions'

class Alert extends Component {
  componentDidUpdate() {
    if (this.props.alert.message !== '') {
      setTimeout(this.props.clearAlert, 4000)
    }
  }

  render() {
    const { type, message } = this.props.alert

    if (message === '') {
      return null
    }

    return <div className={`m-t-4 alert alert-${type}`}>{message}</div>
  }
}

Alert.propTypes = {
  alert: PropTypes.object.isRequired
}

const mapStateToProps = state => ({
  alert: state.commons.alert
})

export default connect(
  mapStateToProps,
  { clearAlert }
)(Alert)
