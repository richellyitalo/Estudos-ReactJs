import React from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'

const Loading = props =>
  props.isLoading ? (
    <div style={style}>
      <FontAwesomeIcon icon="spinner" spin={true} />
    </div>
  ) : null

const style = {
  position: 'fixed',
  top: '20px',
  left: '20px',
  opacity: '0.7'
}

Loading.propTypes = {
  isLoading: PropTypes.bool.isRequired
}

const mapStateToProps = state => ({
  isLoading: state.commons.isLoading
})

export default connect(mapStateToProps)(Loading)
