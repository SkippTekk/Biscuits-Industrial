const express = require('express');
const path = require('path');
const app = express();
const session = require('express-session');
const TWO_HOURS = 1000 * 60 * 5

const {
  PORT = 3000,
  NODE_ENV = 'development',
  SESS_SECRET = 'qwertzxcbasdfgyuiopnmhjkl',

  SESS_NAME = 'sid',
  SESS_LIFETIME = TWO_HOURS
} = process.env

const IN_PROD = NODE_ENV ==='production'



app.use(session({
  name: SESS_NAME,
  resave: false,
  saveUninitialized: false,
  secret: SESS_SECRET,
  cookie: {
    maxAge: SESS_LIFETIME,
    sameSite: true,
    secure: IN_PROD
  }
}))

app.set('view engine', 'pug')
app.use(express.static('public'));

//showing files to the public
app.get('/', function (req, res) {
  res.render(__dirname + '/public/index')
});
app.get('/ships', function (req, res) {
  res.render(__dirname + '/public/ships')
});

//api shit 
const apiRouter = require('./server/routes')
app.use('/api/InvTypes', apiRouter)
app.use(function(req, res) {
    res.sendFile(__dirname + '/api.html');
});

//shit breaking section

app.listen(PORT, ()=> console.log(`server is running on ${PORT}`))