import React from 'react'
import PropTypes from 'prop-types'

const FormInputText = ({
  label,
  name,
  type,
  placeholder,
  value,
  onChange,
  col
}) => (
  <div className="form-group row">
    <label htmlFor={name} className="col-3 col-form-label text-right">
      {label}
    </label>
    <div className={`col-${col}`}>
      <input
        id={name}
        name={name}
        className="form-control"
        type={type}
        placeholder={placeholder}
        value={value}
        onChange={onChange}
      />
    </div>
  </div>
)

FormInputText.defaultProps = {
  type: 'text',
  col: 9
}

FormInputText.propTypes = {
  label: PropTypes.string.isRequired,
  name: PropTypes.string.isRequired,
  type: PropTypes.string.isRequired,
  col: PropTypes.number.isRequired,
  placeholder: PropTypes.string,
  value: PropTypes.oneOfType([
    PropTypes.string.isRequired,
    PropTypes.number.isRequired
  ]),
  onChange: PropTypes.func
}

export default FormInputText
