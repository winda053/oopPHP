<?php

class produk{

    //Property
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    //method
    public function getLabel() {   //akan menampilkan label judul. penerbit, dan harga secara langsung
        return "$this->penulis, $this->penerbit"; 
    }
}
//Kita membuat class baru di dalam file object_type.php
class CetakInfoProduk { //class tugasnya hanya satu yaitu mencetak seluruh info produk
    public function cetak(Produk $produk) { //Hanya memiliki 1 method dan didalam () akan kita isi parameter  untuk method ya dan parameternya adalah object yang sudah kita buat
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str; 
        //fungsi ini " $str " akan mengembalikan nilai sebuah string
    }
}

$produk1 = new produk( " Upin dan Ipin", "kak rose", "Abang saleh", 5000);
$produk2 = new produk( " Rownship", "Anton", "MSi komputer", 10000);

//untuk menampilkan
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
// cara menjalankan fungsi cetak yaitu dengan membuat variabel baru dan kemudian kita instance class baru yang kita buat tadi
// dan untuk mencetak ita tinggan panggil "$infoProduk1->cetak" dan masukkan parameternya
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>
