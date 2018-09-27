import React from 'react'
import classnames from 'classnames'
import PropTypes from 'prop-types'

const TextAreaFieldGroup = ({
  name,
  placeholder,
  value,
  error,
  info,
  onChange,
  disabled
}) => {
  return (
    <div className="form-group">
      <textarea
        className={classnames('form-control form-control-lg', {
          'is-invalid': error
        })}
        name={name}
        placeholder={placeholder}
        onChange={onChange}
        disabled={disabled}
        value={value}
      />
      {info && <span className="form-text text-muted">{info}</span>}
      {error && <div className="invalid-feedback">{error}</div>}
    </div>
  )
}

TextAreaFieldGroup.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string.isRequired,
  label: PropTypes.string,
  error: PropTypes.string,
  info: PropTypes.string,
  onChange: PropTypes.func.isRequired,
  disabled: PropTypes.string
}

export default TextAreaFieldGroup
