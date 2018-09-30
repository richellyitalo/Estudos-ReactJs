import React from 'react'
import classnames from 'classnames'
import PropTypes from 'prop-types'

const TextFieldGroup = ({
  name,
  placeholder,
  value,
  type,
  error,
  info,
  onChange,
  disabled
}) => {
  return (
    <div className="form-group">
      <input
        className={classnames('form-control form-control-lg', {
          'is-invalid': error
        })}
        name={name}
        placeholder={placeholder}
        type={type}
        onChange={onChange}
        value={value}
        disabled={disabled}
      />
      {info && <span className="form-text text-muted">{info}</span>}
      {error && <div className="invalid-feedback">{error}</div>}
    </div>
  )
}

TextFieldGroup.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string.isRequired,
  type: PropTypes.string.isRequired,
  label: PropTypes.string,
  error: PropTypes.string,
  info: PropTypes.string,
  onChange: PropTypes.func.isRequired,
  disabled: PropTypes.bool
}

TextFieldGroup.defaultProps = {
  type: 'text'
}

export default TextFieldGroup
