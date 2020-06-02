const express = require('express');
const app = express();
const apiRouter = require('./routes')


app.use(express.json());

app.use('/api/InvTypes', apiRouter)


app.listen(process.env.PORT || '3000', () => {
    console.log(`server is running on ${process.env.PORT || 3000}`)
});