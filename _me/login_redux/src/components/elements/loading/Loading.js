import React from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

import Spinner from './Spinner'

const Loading = props => (props.isLoading ? <Spinner /> : null)

const mapStateToProps = state => ({
  isLoading: state.common.isLoading
})

Loading.propTypes = {
  isLoading: PropTypes.bool.isRequired
}

export default connect(mapStateToProps)(Loading)
