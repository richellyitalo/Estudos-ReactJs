const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const passport = require('passport');
const path = require('path')

const users = require('./routes/api/users');
const posts = require('./routes/api/posts');
const profile = require('./routes/api/profile');

// DB Config
const db = require('./config/keys').mongo;

// Opções de conexão
let options = {}
if (db.user !== '') {
  options = { auth: {
      user: db.user,
      password: db.password
    },
    dbName: db.dbName
  }
}

// Connection MongoDB
mongoose
  .connect(db.uri, options)
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

// Server static assets in production
if (process.env.NODE_ENV === 'production') {
  // Set static folder
  app.use(express.static('client/build'));

  app.get('*', (req, res) => {
    res.sendFile(path.resolve(__dirname, 'client', 'build', 'index.html'));
  })
}

const port = process.env.PORT || 5000;

app.listen(port, () => console.log(`Server na porta ${port}`));
