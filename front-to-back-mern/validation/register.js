const validator = require('validator');
const isEmpty = require('./is-empty');

const validateRegisterInput = data => {
  const errors = {};

  data.name = isEmpty(data.name) ? '' : data.name;
  data.email = isEmpty(data.email) ? '' : data.email;
  data.password = isEmpty(data.password) ? '' : data.password;
  data.password2 = isEmpty(data.password2) ? '' : data.password2;
  
  // nome
  if (!validator.isLength(data.name, { min: 2, max: 30 })) {
    errors.name = 'Nome deve estar entre 2 e 30 caracteres';
  }

  if (validator.isEmpty(data.name)) {
    errors.name = 'Nome é obrigatório';
  }

  // email
  if (!validator.isEmail(data.email)) {
    errors.email = 'Email inválido';
  }

  if (validator.isEmpty(data.email)) {
    errors.email = 'Email é obrigatório';
  }

  // password
  if (!validator.isLength(data.password, { min: 3, max: 15 })) {
    errors.password = 'Senha deve ser entre 3 e 15 caracteres';
  }

  if (validator.isEmpty(data.password)) {
    errors.password = 'Senha é obrigatório';
  }
  
  // password2
  if (!validator.equals(data.password2, data.password)) {
    errors.password2 = 'Senha de confirmação diferente da senha';
  }

  if (validator.isEmpty(data.password2)) {
    errors.password2 = 'Senha de confirmação é obrigatório';
  }

  return {
    errors,
    isValid: isEmpty(errors)
  };
};

module.exports = validateRegisterInput;
