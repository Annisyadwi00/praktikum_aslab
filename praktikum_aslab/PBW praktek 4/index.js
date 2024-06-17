// deklarasi variabel
// var, let, const

//let nama = "Annisya"

//aturan const : tidak boleh diubah
//nama = "Chaerani"

//console.log(nama);

//tipe data primitid
// number, string, array, object, bolean, float

//let i = [1, 2, 3]

//onsole.log(typeof i)

const mahasiswa = [
    "Annisya",
    "Bunga",
    "Allya",
    "Ghaida"
]
let i = 0;
document.write("<ul>")
while (i < mahasiswa.length){
    document.write("<li>" + mahasiswa[i] + "</li><br>" );
    i++;
}
document.write("</ul>")

//document.write("<ul>")
//for (let i = 0; i < mahasiswa.length; i++){
   // document.write("<li>" + mahasiswa[i] + "</li><br>")
//}
//document.write("</ul>")