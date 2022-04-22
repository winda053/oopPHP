<?php

//Kita ingin menggabungkan dari info produk dan kita ingin menambahkan jumlah halaman dan waktu main

class produk{

    //Property
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }

    //method
    public function getLabel() {   //akan menampilkan label judul. penerbit, dan harga secara langsung
        return "$this->penulis, $this->penerbit"; 
    }

    public function getInfoproduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;

    }
}

//kalau kita manggil sebuah method untuk class child maka yang pertama dilakukan 
//adalah dia cari dulu didalam class child nya ada method class tersebut atau tidak
//jika tidak ada maka secara otomatis dia akan mencari di parents nya ada atau tidak

class komik extends produk {
    public function getInfoproduk() {
        $str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk {
    public function getInfoproduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}



class CetakInfoProduk { //class tugasnya hanya satu yaitu mencetak seluruh info produk
    public function cetak(Produk $produk) { //Hanya memiliki 1 method dan didalam () akan kita isi parameter  untuk method ya dan parameternya adalah object yang sudah kita buat
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str; 
        //fungsi ini " $str " akan mengembalikan nilai sebuah string
    }
}


//Parameternya akan masuk ke constructnya dari class yang kita instansiai
$produk1 = new komik( " Upin dan Ipin", "kak rose", "Abang saleh", 5000, 100, 0);
$produk2 = new Game( " Rownship", "Anton", "MSi komputer", 10000, 0, 50);

echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();



?>
