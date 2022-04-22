<?php

class produk{
    //Property
    public $judul,
           $penulis,
           $penerbit;
    
    protected $diskon = 0;
    
    private $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getHarga() {
        return $this->harga -  ($this->harga * $this->diskon / 100 );
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
//spesifiknya perluasan fungsionalitasnya ada di class-class child nya

class komik extends produk {
    public $jmlHalaman;

    public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        //Pada saat kita memanggil parent nya, nilai defaulnya tidak perlu kita isi supaya tidak di isi ulang ( ditimpa )
        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoproduk() {
        $str = "komik : " . parent::getInfoproduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
// :: ini merupakan method statik
class Game extends produk {
    public $waktuMain;

    public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {

        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon ($diskon) {
        $this->diskon = $diskon;
    }


    public function getInfoproduk() {
        $str = "Game : " . parent::getInfoproduk() ." ~ {$this->waktuMain} Jam.";
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
$produk1 = new komik( " Upin dan Ipin", "kak rose", "Abang saleh", 5000, 100);
$produk2 = new Game( " Rownship", "Anton", "MSi komputer", 10000, 50);

echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();
echo "<hr>"; 

$produk2->setDiskon(50);
echo $produk2->getHarga();



?>
