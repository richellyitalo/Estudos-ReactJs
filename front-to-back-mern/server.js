const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const passport = require('passport');

const users = require('./routes/api/users');
const posts = require('./routes/api/posts');
const profile = require('./routes/api/profile');

// DB Config
const db = require('./config/keys').mongoURI;

// Connection MongoDB
mongoose
  .connect(db)
  .then(() => console.log('Conectado do MongoDB...'))
  .catch(err =>
    console.log('Não foi possível conectar ao MongoDB', err.message)
  );

const app = express();

// Middlewares
  // * BodyParser
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
  // * passport
app.use(passport.initialize());

// Config passport
require('./config/passport')(passport);

app.get('/', (req, res) => res.send('App MERN'));

// Routes
app.use('/api/users', users);
app.use('/api/posts', posts);
app.use('/api/profile', profile);

const port = process.env.PORT || 5000;

app.listen(port, () => console.log(`Server na porta ${port}`));
