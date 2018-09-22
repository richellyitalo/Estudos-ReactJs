const validator = require('validator');
const isEmpty = require('./is-empty');

const validateLoginInput = data => {
  const errors = {};

  data.email = isEmpty(data.email) ? '' : data.email;
  data.password = isEmpty(data.password) ? '' : data.password;
  
  // email
  if (!validator.isEmail(data.email)) {
    errors.email = 'Email inválido';
  }

  if (validator.isEmpty(data.email)) {
    errors.email = 'Email é obrigatório';
  }

  // password
  if (validator.isEmpty(data.password)) {
    errors.password = 'Senha é obrigatório';
  }

  return {
    errors,
    isValid: isEmpty(errors)
  };
};

module.exports = validateLoginInput;
