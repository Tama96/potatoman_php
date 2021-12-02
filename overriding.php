<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function helloWorld () {
        return "Hello programmer umbi-umbian.....pulang sana!!";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    // contoh constructor harus menggunakan __ karena method spesial
    public function __construct( $judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

class Komik extends Produk {
    public $halaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $halaman ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga);

    $this->halaman = $halaman;

    }

    public function getInfoLengkap() {
        $str = "Komik : " . parent::getInfoLengkap() . " - {
            $this->halaman} Halaman.";
        return $str; 
    }
}

class Game extends Produk {
    public $waktu;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktu ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga);

    $this->waktu = $waktu;

    }

    public function getInfoLengkap() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {
            $this->waktu} Jam.";
        return $str; 
    }
}

// contoh object type bisa bikin spesifik property yg mau diambil
class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Komik ("bobo", "kancil", "bobocorp", 25000, 250, 0);
$produk3 = new Game ("uncharted", "joko bodo", "microsoft", 400000, 0, 50);

echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
