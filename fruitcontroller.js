//import data
const fruits = require('./data');

//menampilkan semua data
const index = () => {
    for (const fruit of fruits) {
        console.log('fruit');
    }
}

// menambahkan data
const store = (name) => {
    fruits.push (name);
    index()
}

//mengupdate data
const update = (id, name) => {
    fruits[id] =  name;
    index()
}

//menghapus data
const destroy = (id) => {
    fruits.splice (id, 1);
    index()
}

//export module
module.exports = { index, store, update, destroy}