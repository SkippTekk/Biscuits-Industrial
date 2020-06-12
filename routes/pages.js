const express = require('express');
const app = express.Router();
const bcrypt = require('bcrypt');


//showing files to the public
app.get('/', (req, res) => {
    res.render('index');
  });
app.use('/auth', require('../routes/auth'));

app.get('/login', (req, res) => {
  res.render('login');
});



app.get('/register', (req, res) => {
  res.render('register');
});



app.get('/ships', function (req, res) {
  res.render('ships')
});

  //api shit 
const apiRouter = require('../server/routes')
app.use('/api/InvTypes', apiRouter)
app.use(function(req, res) {
    res.render('../api.pug');
});
module.exports = app;