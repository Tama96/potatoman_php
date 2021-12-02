<?php

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
    // contoh constructor harus menggunakan __ karena method spesial
    public function __construct( $judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

$produk2 = new Produk ("bobo", "kancil", "bobocorp", 25000);
$produk3 = new Produk ("uncharted", "joko bodo", "microsoft", 400000);

echo "Game ini namanya $produk3->judul, ditulis oleh $produk3->penulis, penerbit $produk3->penerbit dengan harga $produk3->harga";
echo "<br>";
echo "Tabloid : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();