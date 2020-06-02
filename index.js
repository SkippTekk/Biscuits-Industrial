const express = require('express');
const path = require('path');
const PORT = process.env.PORT || 3000;
const app = express();
app.set('view engine', 'pug')


//showing files to the public
app.get('/', function (req, res) {
  res.render(__dirname + '/public/index')
})


//api shit 
const apiRouter = require('./server/routes')
app.use('/api/InvTypes', apiRouter)
app.use(function(req, res) {
    res.sendFile(__dirname + '/api.html');
});

//shit breaking section
app.use(function(req, res) {
    res.sendFile(__dirname +'/error/404.html');
  });

app.listen(PORT, ()=> console.log(`server is running on ${PORT}`))