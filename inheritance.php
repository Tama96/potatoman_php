<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0,
           $halaman = 0,
           $waktu = 0;

    public function helloWorld () {
        return "Hello programmer umbi-umbian.....pulang sana!!";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    // contoh constructor harus menggunakan __ karena method spesial
    public function __construct( $judul, $penulis, $penerbit, $harga, $halaman, $waktu ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
    }
}

// contoh object type bisa bikin spesifik property yg mau diambil
class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) - {$produk->halaman}";
        return $str;
    }
}

class CetakInfoGame {
    public function cetak( Produk $game ) {
        $str = "{$game->judul} | {$game->getLabel()} (Rp. {$game->harga}) - {$game->waktu}";
        return $str;
    }
}

$produk2 = new Produk ("bobo", "kancil", "bobocorp", 25000, 250, 0);
$produk3 = new Produk ("uncharted", "joko bodo", "microsoft", 400000, 0, 50);

$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);
echo "<br>";
$infoProduk3 = new CetakInfoGame();
echo $infoProduk3->cetak($produk3);