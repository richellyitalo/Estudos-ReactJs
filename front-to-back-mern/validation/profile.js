const validator = require('validator');
const isEmpty = require('./is-empty');

const validateProfileInput = data => {
  const errors = {};

  data.handle = isEmpty(data.handle) ? '' : data.handle;
  data.status = isEmpty(data.status) ? '' : data.status;
  data.skills = isEmpty(data.skills) ? '' : data.skills;
  data.website = isEmpty(data.website) ? '' : data.website;
  data.youtube = isEmpty(data.youtube) ? '' : data.youtube;
  data.facebook = isEmpty(data.facebook) ? '' : data.facebook;
  data.twitter = isEmpty(data.twitter) ? '' : data.twitter;
  data.linkedin = isEmpty(data.linkedin) ? '' : data.linkedin;
  data.instagram = isEmpty(data.instagram) ? '' : data.instagram;

  // handle
  if (!validator.isLength(data.handle, { min: 2, max: 40 })) {
    errors.handle = 'Informe o apelido entre 2 e 40 caracteres';
  }

  if (validator.isEmpty(data.handle)) {
    errors.handle = 'Apelido é obrigatório';
  }

  // status
  if (validator.isEmpty(data.status)) {
    errors.status = 'Status é obrigatório';
  }

  // skills
  if (validator.isEmpty(data.skills)) {
    errors.skills = 'Skill é obrigatório';
  }

  // website
  if (!validator.isEmpty(data.website) && !validator.isURL(data.website)) {
    errors.website = 'URL inválida';
  }

  // Social
  if (!validator.isEmpty(data.youtube) && !validator.isURL(data.youtube)) {
    errors.youtube = 'URL inválida';
  }

  if (!validator.isEmpty(data.twitter) && !validator.isURL(data.twitter)) {
    errors.twitter = 'URL inválida';
  }

  if (!validator.isEmpty(data.facebook) && !validator.isURL(data.facebook)) {
    errors.facebook = 'URL inválida';
  }

  if (!validator.isEmpty(data.linkedin) && !validator.isURL(data.linkedin)) {
    errors.linkedin = 'URL inválida';
  }

  if (!validator.isEmpty(data.instagram) && !validator.isURL(data.instagram)) {
    errors.instagram = 'URL inválida';
  }

  return {
    errors,
    isValid: isEmpty(errors)
  };
};

module.exports = validateProfileInput;