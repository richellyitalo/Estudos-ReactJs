const router = require('express').Router();
const gravatar = require('gravatar');
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const keys = require('../../config/keys');
const passport = require('passport');

const User = require('../../models/User');
const validateRegisterInput = require('../../validation/register');
const validateLoginInput = require('../../validation/login');

// @route   GET api/users/test
// @desc    Test user route
// @access  Public
router.get('/test', (req, res) => res.json({ msg: 'User works!' }));

// @route   POST api/users/register
// @desc    Register a new user
// @access  Public
router.get('/register', (req, res) => {
  // 0 - Validação de dados
  const { errors, isValid } = validateRegisterInput(req.body);
  if (!isValid) {
    return res.status(400).json(errors);
  }

  // 1 - Verifica se existe um cadastro com o email
  User.findOne({ email:  req.body.email })
    .then(user => {
      if (user) {
        errors.email = 'E-mail já existe.';
        return res.status(400).json(errors);
      }

      // 2 - Pega as variaveis cruas
      const { name, email, password } = req.body;

      // 3 - Pesquisa o gravatar
      const avatar = gravatar.url(email, {
        s: '400', 
        r: 'pg', 
        d: '404'
      });

      // 4 - Inicia o prototipo de Usuario
      const newUser = new User({
        name,
        email,
        avatar
      });

      // 5 - Criptografa a senha
      bcrypt.genSalt(10, (err, salt) => { // Gera o Salt
        bcrypt.hash(password, salt, (err, hash) => { // Gera o hash
          if (err) return res.status(400).send({ msg: err.message });
          
          newUser.password = hash;
          newUser.save()
            .then(user => res.json(user))
            .catch(err => res.status(400).json({ msg: err.message }));
        });
      });
    })
});

// @route   POST api/users/login
// @desc    Login a user | return JWT Token
// @access  Public
router.post('/login', (req, res) => {
  const { email, password } = req.body;
  // 0 - Validacao
  const { errors, isValid } = validateLoginInput(req.body);
  if (!isValid) {
    return res.status(400).json(errors);
  }

  // 1 - Verifica usuario por email
  User.findOne({ email })
    .then(user => {
      if (!user) {
        errors.email = 'Usuário não encontrado';
        return res.status(404).send(errors);
      }
      
      // 2 - Verifica senha
      bcrypt.compare(password, user.password)
        .then(isMatch => {
          if (isMatch) {
            // 3 - Gerando JWT
            const { id, name, avatar } = user;
            const payload = { id, name, avatar };

            jwt.sign(
              payload, 
              keys.secretOrKey,
              { expiresIn: 3600 },
              (err, token) => {
                return res.json({ success: true, token: 'Bearer ' + token });
              }
            );
          } else {
            errors.password = 'Senha incorreta';
            return res.status(400).json(errors);
          }
        })
    })
});

// @route   GET api/users/current
// @desc    Return current user
// @access  Private
router.get(
  '/current', 
  passport.authenticate('jwt', { session: false} ),
  (req, res) => {
    res.json({
      name: req.user.name,
      email: req.user.email,
      avatar: req.user.avatar
    });
  }
);

module.exports = router;
