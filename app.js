const express = require('express');
const bodyParser = require('body-parser');
const ejs = require('ejs');
const http = require('http');

const app = express();

app.set('view engine', "ejs");
app.use(bodyParser.urlencoded({extended:true}));

app.get("/", (req,res)=>{
  res.render("home");
})


app.listen(3000,()=>{
  console.log("Running on port:3000");
})
