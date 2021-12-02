<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0,
           $halaman = 0,
           $waktu = 0,
           $tipe = "tipe";

    public function helloWorld () {
        return "Hello programmer umbi-umbian.....pulang sana!!";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } else $str .= " - {$this->waktu} Jam.";

        return $str;
    }
    // contoh constructor harus menggunakan __ karena method spesial
    public function __construct( $judul, $penulis, $penerbit, $harga, $halaman, $waktu, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        $this->tipe = $tipe;
    }
}

// contoh object type bisa bikin spesifik property yg mau diambil
class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk2 = new Produk ("bobo", "kancil", "bobocorp", 25000, 250, 0, "Komik");
$produk3 = new Produk ("uncharted", "joko bodo", "microsoft", 400000, 0, 50, "Game");

echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
