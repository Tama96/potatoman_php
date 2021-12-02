<?php
// get untuk ambil data sedangkan set untuk merubah data
// 3 macam visibility yaitu public, private dan protected (cuma dalam class)
class Produk {
    private $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $diskon = "diskon";

    // protected $diskon = 0;
    // contoh penggunaan protected
    // protected $harga = 0;

    // jika private maka method harus dalam class yg sama
    private $harga = 0;

    public function setJudul( $judul ) {
        // contoh jika judul tidak string maka akan keluar eror
        if( !is_string($judul) ) {
            throw new Exception("Woi Programmer Umbi-umbian Eror Woi Dong Udu", 1);
        }
        $this->judul = $judul;
    }

    // celah untuk mengakses visibilitas private contoh property judul
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    } 

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    } 

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    } 

    public function getDiskon() {
        return $this->diskon;
    }

    public function getHarga(){
         return $this->harga - ($this->diskon * $this->harga / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
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

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {
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
    // contoh jika diskon protected
    /* public function setDiskon($diskon) {
        $this->diskon = $diskon;
    } */

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {
            $this->waktu} Jam.";
        return $str; 
    }
}

class CetakInfoProduk {
    public $daftarproduk = array();

    public function tambahProduk( Produk $produk ) {
        // fungsi untuk menambah item pada php dengan []
        // klo di python sama seperti list
        $this->tambahProduk [] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        
        foreach( $this->tambahProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk2 = new Komik ("bobo", "kancil", "bobocorp", 25000, 250);
$produk3 = new Game ("uncharted", "joko bodo", "microsoft", 400000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
echo $cetakProduk->cetak();