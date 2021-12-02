<?php
/*
class Mobil {
    // property
    public $nama;
    public $warna;
    public $kecepatan;

    // method
    public function tambahkecepatan() {

    }

    public function kurangikecepatan() {

    }
} */

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function helloWorld () {
        return "Hello programmer umbi-umbian.....pulang sana!!";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

/*
$produk1 = new Produk();
$produk1->judul = "Netflix";
// jika menulis yang tidak ada di property maka 
// akan otomatis tertambah
$produk2 = new Produk();
$produk2->tahun = 2021;
*/

$produk3 = new Produk ();
$produk3->judul = "uncharted";
$produk3->penulis = "joko bodo";
$produk3->penerbit = "microsoft";
$produk3->harga = 400000;

echo "Game ini namanya $produk3->judul, ditulis oleh $produk3->penulis, penerbit $produk3->penerbit dengan harga $produk3->harga";
echo "<br>";
echo $produk3->helloWorld();
echo "<br>";
echo $produk3->getLabel();