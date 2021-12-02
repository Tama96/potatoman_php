<?php
/* // constanta nilainya tidak akan berubah dan jika constanta
// gunakan huruf besar semua

// define itu constanta global harus di luar class
define('NAMA', 'Tama');
echo NAMA;

echo "<br>";

// const konstanta dalam class
const UMUR = 32;
echo UMUR; */

class Coba {
    const NAMA = 'Tamvan';
}

echo Coba::NAMA;

?>