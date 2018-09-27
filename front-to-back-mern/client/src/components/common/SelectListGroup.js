import React from 'react'
import classnames from 'classnames'
import PropTypes from 'prop-types'

const SelectListGroup = ({
  name,
  placeholder,
  value,
  error,
  info,
  onChange,
  disabled,
  options
}) => {
  const selectOptions = options.map(option => (
    <option key={option.label} value={option.value}>
      {option.label}
    </option>
  ))

  return (
    <div className="form-group">
      <select
        className={classnames('form-control form-control-lg', {
          'is-invalid': error
        })}
        name={name}
        placeholder={placeholder}
        onChange={onChange}
        disabled={disabled}
        value={value}
      >
        {selectOptions}
      </select>
      {info && <span className="form-text text-muted">{info}</span>}
      {error && <div className="invalid-feedback">{error}</div>}
    </div>
  )
}

SelectListGroup.propTypes = {
  name: PropTypes.string.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.string.isRequired,
  label: PropTypes.string,
  error: PropTypes.string,
  info: PropTypes.string,
  onChange: PropTypes.func.isRequired,
  disabled: PropTypes.string,
  options: PropTypes.array.isRequired
}

export default SelectListGroup
