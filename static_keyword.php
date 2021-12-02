<?php

/* class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Woi " . self::$angka . " kali.";
    }
}

// dengan static dapat langsung memanggil property
// syaratnya panggil nama class ikuti dengan ::

echo ContohStatic::$angka;

// panggil method sama dengan class
echo "<br>";
echo ContohStatic:: halo(); */

// contoh menggunakan instance oop biasa
// angka akan tereset jika object berbeda

/* class Contoh {
    public $angka = 1;

    public function halo() {
        return "Halo " . $this->angka++ . " kali.";
    }
}

$angka = new Contoh;
echo $angka->halo();
echo $angka->halo();
echo $angka->halo(); */


// contoh menggunakan static
// angka akan tetap lanjut meskipun beda object

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali.";
    }
}

$angka = new Contoh;
echo $angka->halo();
echo $angka->halo();
echo $angka->halo();
echo "<br>";
$angka2 = new Contoh;
echo $angka2->halo();
echo $angka2->halo();
echo $angka2->halo();
?>