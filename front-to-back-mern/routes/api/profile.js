const router = require('express').Router();
const passport = require('passport');

// Carrega modelo Profile
const Profile = require('../../models/Profile');
// Carrega modelo User
const User = require('../../models/User');

// Validacao
const validateProfileInput = require('../../validation/profile')
const validateExperienceInput = require('../../validation/experience')
const validateEducationInput = require('../../validation/education')

// @route   GET api/profile/test
// @desc    Test profile route
// @access  Public
router.get('/test', (req, res) => res.json({ msg: 'Profile Works!' }));

// @route   GET api/profile
// @desc    Get profile from user
// @access  Private
router.get('/', passport.authenticate('jwt', { session: false}), (req, res) => {
  const errors = {};

  // 1 - pesquisa profile
  Profile.findOne({ user: req.user.id })
    .populate('user', ['name', 'avatar'])
    .then(profile => {
      // 2 - retorna erro se nao existe
      if (!profile) {
        errors.noprofile = 'Não existe perfil desse usuário';
        return res.status(404).json(errors);
      }
      // 3 - retorna o profile
      res.json(profile);
    })
    .catch(err => res.status(404).json(err));
});

// @route   POST api/profile
// @desc    Create | Update a profile
// @access  Private
router.post('/', passport.authenticate('jwt', { session: false }), (req, res) => {
  const { body } = req;
  // 0 - Validacao
  const { errors, isValid } = validateProfileInput(body);
  if (!isValid) {
    return res.status(400).send(errors);
  }

  // 1 - Pega os campos
  const profileFields = {
    user: req.user.id
  };
  if (body.handle) profileFields.handle = body.handle;
  if (body.company) profileFields.company = body.company;
  if (body.website) profileFields.website = body.website;
  if (body.location) profileFields.location = body.location;
  if (body.status) profileFields.status = body.status;
  if (body.bio) profileFields.bio = body.bio;
  if (body.githubusername) profileFields.githubusername = body.githubusername;

  // Skills
  if (typeof body.skills !== 'undefined') {
    profileFields.skills = body.skills.split(',');
  }

  // Social
  profileFields.social = {};
  if (body.youtube) profileFields.social.youtube = body.youtube;
  if (body.twitter) profileFields.social.twitter = body.twitter;
  if (body.facebook) profileFields.social.facebook = body.facebook;
  if (body.linkedin) profileFields.social.linkedin = body.linkedin;
  if (body.instagram) profileFields.social.instagram = body.instagram;
  
  // 2 - Pesquisa profile
  Profile.findOne({ user: req.user.id })
    .populate('user', ['name', 'avatar'])
    .then(profile => {
      if (profile) {
        // 3 - Se o profile já existir, atualiza
        Profile.findOneAndUpdate(
          { user: req.user.id }, 
          { $set: profileFields },
          { new: true }
        )
        .populate('user', ['name', 'avatar'])
        .then(profile => res.json(profile));
      } else {
        // 4 - Se não existir, verifica se o handle já existe
        Profile.findOne({ handle: profileFields.handle })
          .then(profile => {
            if (profile) {
              // * handle deve ser unico
              errors.handle = 'Esse \'handle\' já existe'
              res.status(400).json(errors);
            }

            // 3 - Se não existir, cria
            new Profile(profileFields)
              .save()
              .then(profile => res.json(profile));
          })

      }
    })
});

// @route   GET api/profile/handle/:handle
// @desc    Get profile by handle
// @access  Public
router.get('/handle/:handle', (req, res) => {
  const errors = {};

  // 1 - Busca profile
  Profile.findOne({ handle: req.params.handle })
    .populate('user', ['name', 'avatar'])
    .then(profile => {
      if (!profile) {
        errors.noprofile = 'Profile não encontrado';
        return res.status(404).json(errors);
      }
      res.json(profile);
    })
    .catch(err => res.status(404).json(err));
});

// @route   GET api/profile/user/:user_id
// @desc    Get profile by user_id
// @access  Public
router.get('/user/:user_id', (req, res) => {
  const errors = {};
  // 1 - Consulta de profile 
  Profile.findOne({ user: req.params.user_id })
    .populate('user', ['name', 'avatar'])
    .then(profile => {
      if (!profile) {
        errors.noprofile = 'Não há profile para este usuário';
        return res.status(404).res(errors);
      }
      res.json(profile);
    })
    .catch(err => res.status(404).json({ profile: 'Não há um profile para esse usuário.' }));
});

// @route   GET api/profile/all
// @desc    Get all profiles
// @access  Public
router.get('/all', (req, res) => {
  const errors = {};

  Profile.find()
    .populate('user', ['name', 'avatar'])
    .then(profiles => {
      if (!profiles) {
        errors.noprofile = 'Não há profiles';
        return res.status(404).json(errors);
      }
      res.json(profiles);
    })
    .catch(err => res.json(err.message));
});

// @route   POST api/profile/experience
// @desc    Add experience to profile
// @access  Private
router.post('/experience', passport.authenticate('jwt', { session: false }), (req, res) => {
  // 0 - Validação
  const { errors, isValid } = validateExperienceInput(req.body);
  if (!isValid) {
    return res.status(400).json(errors);
  }

  // 1 - Consulta de profile
  Profile.findOne({ user: req.user.id })
    .then(profile => {
      const newExp = {
        title: req.body.title,
        company: req.body.company,
        location: req.body.location,
        from: req.body.from,
        to: req.body.to,
        current: req.body.current,
        description: req.body.description
      };

      // 2 - Adiciona exp
      profile.experience.unshift(newExp);

      profile.save().then(profile => res.json(profile));
    })
});

// @route   POST api/profile/education
// @desc    Add education to profile
// @access  Private
router.post('/education', passport.authenticate('jwt', { session: false }), (req, res) => {
  // 0 - Validação
  const { errors, isValid } = validateEducationInput(req.body);
  if (!isValid) {
    return res.status(400).json(errors);
  }

  // 1 - Consulta de profile
  Profile.findOne({ user: req.user.id })
    .then(profile => {
      const newEdu = {
        school: req.body.school,
        degree: req.body.degree,
        fieldofstudy: req.body.fieldofstudy,
        from: req.body.from,
        to: req.body.to,
        current: req.body.current,
        description: req.body.description
      };

      // 2 - Adiciona edu
      profile.education.unshift(newEdu);
      
      profile.save().then(profile => res.json(profile));
    })
});

// @route   DELETE api/profile/experience/:exp_id
// @desc    Delete a experience from profile
// @access  Private
router.delete('/experience/:exp_id', passport.authenticate('jwt', { session: false }), (req, res) => {
  const errors = {};
  // 1 - Busca profile
  Profile.findOne({ user: req.user.id })
    .then(profile => {
      // 2 - Encontra o index da exp
      const removeIndex = profile.experience
        .map(item => item.id)
        .indexOf(req.params.exp_id);
      if (removeIndex < 0) {
        errors.noexperience = 'Experência não encontrada';
        return res.status(404).json(errors);
      }

      profile.experience.splice(removeIndex, 1);

      profile.save().then(profile => res.json(profile));
    })
    .catch(err => res.status(400).json(err.message));
});

// @route   DELETE api/profile/education/:edu_id
// @desc    Delete a education from profile
// @access  Private
router.delete('/education/:edu_id', passport.authenticate('jwt', { session: false }), (req, res) => {
  const errors = {};
  // 1 - Busca profile
  Profile.findOne({ user: req.user.id })
    .then(profile => {
      // 2 - Encontra o index da exp
      const removeIndex = profile.education
        .map(item => item.id)
        .indexOf(req.params.edu_id);
      if (removeIndex < 0) {
        errors.noeducation = 'Educação não encontrada';
        return res.status(404).json(errors);
      }

      profile.education.splice(removeIndex, 1);

      profile.save().then(profile => res.json(profile));
    })
    .catch(err => res.status(400).json(err.message));
});

// @route   DELETE api/profile
// @desc    Delete profile
// @access  Private
router.delete('/', passport.authenticate('jwt', { session: false }), (req, res) => {
  Profile.findOneAndRemove({ user: req.user.id })
    .then(() => {
      User.findOneAndRemove({ _id: req.user.id })
        .then(() => res.json({ success: true }));
    })
    .catch(err => res.status(404).json(err.message));
});

module.exports = router;
