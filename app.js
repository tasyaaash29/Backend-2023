// import method dalam controller
const { index, store, update, destroy} = require('./fruitcontroller')

//membuat fungsi main
const main = () => {
    console.log (' Method Index - Menampilkan Buah');
    index ()

    console.log ('\nMethod Store - Menambahkan Buah Pisang');
    store ('Pisang')

    console.log ('\nMethod Update - Update Data 0 jadi Kelapa');
    update (0, 'Kelapa')

    console.log ('\nMethod Destroy - Menghapus Data 0');
    destroy(0)

}

main()