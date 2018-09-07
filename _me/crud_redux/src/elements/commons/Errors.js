import React from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'

const Errors = ({ errors }) =>
  errors.length === 0 ? null : (
    <div className="alert alert-danger">
      <ul>
        {errors.map((error, index) => (
          <li key={index}>{error}</li>
        ))}
      </ul>
    </div>
  )

Errors.propTypes = {
  errors: PropTypes.array.isRequired
}

const mapStateToProps = state => ({
  errors: state.commons.errors
})

export default connect(mapStateToProps)(Errors)
