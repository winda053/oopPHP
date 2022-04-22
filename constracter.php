<?php

class produk{

    //Property

    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __constrruct( $judul, $penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    //method
    public function getLabel() {   //akan menampilkan label judul. penerbit, dan harga secara langsung
        return "$this->judul, $this->penerbit, $this->harga"; 
    }
}

$produk1 = new produk( " Upin dan Ipin", "kak ros", "Abang saleh", 5000);
$produk2 = new produk( " Rownship", "Anton", "MSi komputer", 10000);
$produk3 = new produk( "Naruto");
//untuk menampilkan
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
var_dump($produk3);

?>
