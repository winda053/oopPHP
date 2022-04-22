<?php


class Contohstatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo ". self::$angka++ . " kali. "; // jika kita ingin mengambil angka didalam method angka  
    }
}

//cara untuk mencetak dengan method static yaitu panggil class nya ditambahkan :: seperti kode dibawah
echo Contohstatic::$angka; // untuk mencetak angka
echo "<br>";
echo Contohstatic::halo(); // untuk mencetak method halo
echo "<hr>";
echo Contohstatic::halo();  // untuk menampilkan gabungan halo dan angka



?>