<?php
//Jualan produk
//Komik
//game
class produk{

    //Property

    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    //method
    public function getLabel() {   //akan menampilkan label judul. penerbit, dan harga secara langsung
        return "$this->judul, $this->penerbit, $this->harga"; 

        //jika kita menjalankan ini saja maka ini akan error karena 
        //jika menulis variabel didalm function itu artinya variabel untuk function itu saja
        //bukan ngambil dari variabel yang di luar
        //untuk ambil isi dari property yang di dalam class kita harus menambahkan keyword 
        // this->, maka nanti penulis ini akan mengacu ke $penulis = "penulis",
    }

}
// $produk1 = new produk();
//$produk1->judul = "upin dan ipin";
//var_dump($produk1);

//$produk2 = new produk();
//$produk2->tambahProperty = "Bidadari Surga";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Upin dan Ipin";
$produk3->penulis = "Kak ros";
$produk3->penerbit = "Abang saleh";
$produk3->harga = 5000;

$produk4 = new produk();
$produk4->judul = "Township";
$produk4->penulis = "Anton";
$produk4->penerbit = "MSi komputer";
$produk4->harga = 100000;

//untuk menampilkan
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();

//var_dump($produk3);

// Misalkan kita akan membuat label
//echo "komik : $produk3->judul, $produk3->penerbit, $produk3->harga";
//echo "<br>";
//echo $produk3->getLabel();


//cara menampilkan method
// jika hanya mengetikkan $produk3->sayHello(); maka tidak akan mucul karena 
//method nya masih hanya mengembalikan nilai belum mencetak nilai
//jika ingin mencetak nilai maka kita cukup tambahkan echo saja di awalanya.
//echo $produk3->sayHello();

//cara menampilkan label dengan menggunakan method


?>