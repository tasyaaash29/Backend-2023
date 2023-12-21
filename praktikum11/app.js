//Import express
const express = require("express");
const router = require("./routes/api.js");

// mwmbuat object express
const app = express();

//menggunakan middleware
app.use(express.json());
app.use(express.urlencoded({ extends: true }))

//menggunakan routeing (router)
app.use(router);

//mendefinisikan port.
app.listen(3000,);