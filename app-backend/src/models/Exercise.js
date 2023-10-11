const mongoose = require('mongoose');

const exerciseSchema = new mongoose.Schema({
  name: String,
  series: Number, // Add a duration field
  reps: Number, // Add other fields as needed
  description: String,
});

const Exercise = mongoose.model('Exercise', exerciseSchema);

module.exports = Exercise;