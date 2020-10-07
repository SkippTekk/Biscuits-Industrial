require('dotenv').config();
const express = require('express');
const path = require('path');
const app = express();
const session = require('express-session');
const Cookies = require('cookies');
const cookieParser = require('cookie-parser');
const TWO_HOURS = 1000 * 60 * 5;

const mysql = require('mysql');
// const db = mysql.createPool({
//   password: process.env.MYSQL_PASS,
//   user: process.env.MYSQL_USER,
//   database: process.env.MYSQL_DB,
//   host: process.env.MYSQL_HOST,
//   charset: 'utf8mb4_bin'
// });
// db.getConnection( (err) =>{
//   if(err) {
//     console.log(err)}
//     else {
//       console.log(`Database connected to database` + process.env.MYSQL_DB + ` index.js`)
//     }
// });
app.set('view engine', 'pug')
app.use(express.static('public'));

//login shit goes here
app.use(express.urlencoded({ extended: false}));
app.use(express.json());
app.use(cookieParser());

app.use('/', require('./routes/pages'));



const {
  PORT = 5000,
  NODE_ENV = 'development',
  SESS_SECRET = `${process.env.SECRET_KEY}`,

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
}));



app.listen(PORT, ()=> console.log(`server is running on ` + PORT));