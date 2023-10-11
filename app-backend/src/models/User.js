const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
  User: String,
});

const User = mongoose.model('User', userSchema);

module.exports = User;