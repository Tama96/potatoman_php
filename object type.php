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

// contoh object type bisa bikin spesifik property yg mau diambil
class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Produk ("bobo", "kancil", "bobocorp", 25000);
$produk3 = new Produk ("uncharted", "joko bodo", "microsoft", 400000);

$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);