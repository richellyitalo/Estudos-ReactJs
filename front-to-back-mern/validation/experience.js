const validator = require('validator');
const isEmpty = require('./is-empty');

const validateExperienceInput = data => {
  const errors = {};

  data.title = isEmpty(data.title) ? '' : data.title;
  data.company = isEmpty(data.company) ? '' : data.company;
  data.from = isEmpty(data.from) ? '' : data.from;

  if (validator.isEmpty(data.title)) {
    errors.title = 'Campo título é obrigatório';
  }

  if (validator.isEmpty(data.company)) {
    errors.company = 'Campo empresa é obrigatório';
  }

  if (validator.isEmpty(data.from)) {
    errors.from = 'Campo de é obrigatório';
  }

  return {
    errors,
    isValid: isEmpty(errors)
  };
};

module.exports = validateExperienceInput;