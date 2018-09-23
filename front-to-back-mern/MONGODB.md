# Tabela com relacionamento
```js
const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const profileSchema = new Schema({
  user: {
    type: Schema.Types.ObjectId,
    ref: 'users'
  }
});

const Profile = mongoose.model('Profile', profileSchema);

module.exports = Profile;
```