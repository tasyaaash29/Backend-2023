// Import express
const express = require('express');

// membuat object express
const app = express();

// middleware
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// definisi route
const router = require("./routes/api");
app.use(router);

// definisi port
app.listen(3000, () => {
    console.log("Server running at http://localhost:3000");
});