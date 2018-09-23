const validator = require('validator');
const isEmpty = require('./is-empty');

const validateEducationInput = data => {
  const errors = {};

  data.school = isEmpty(data.school) ? '' : data.school;
  data.degree = isEmpty(data.degree) ? '' : data.degree;
  data.fieldofstudy = isEmpty(data.fieldofstudy) ? '' : data.fieldofstudy;
  data.from = isEmpty(data.from) ? '' : data.from;

  if (validator.isEmpty(data.school)) {
    errors.school = 'Campo escola é obrigatório';
  }

  if (validator.isEmpty(data.degree)) {
    errors.degree = 'Campo grau é obrigatório';
  }

  if (validator.isEmpty(data.fieldofstudy)) {
    errors.fieldofstudy = 'campo área de estudo é obrigatório';
  }

  if (validator.isEmpty(data.from)) {
    errors.from = 'Campo de é obrigatório';
  }

  return {
    errors,
    isValid: isEmpty(errors)
  };
};

module.exports = validateEducationInput;