<?php

//Kita ingin menggabungkan dari info produk dan kita ingin menambahkan jumlah halaman dan waktu main

class produk{

    //Property
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
        
    }

    //method
    public function getLabel() {   //akan menampilkan label judul. penerbit, dan harga secara langsung
        return "$this->penulis, $this->penerbit"; 
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            if($this->tipe == "komik") {
                $str .= " - {$this->jmlHalaman} Halaman.";
            } else if ( $this->tipe == "Game") {
                $str .= " ~ {$this->waktuMain} Jam.";
            }


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



$produk1 = new produk( " Upin dan Ipin", "kak rose", "Abang saleh", 5000, 100, 0, "komik");
$produk2 = new produk( " Rownship", "Anton", "MSi komputer", 10000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



?>
