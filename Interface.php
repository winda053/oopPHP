<?php
interface Infoproduk{ 
    public function getInfoproduk();
}

class produk {
    //Property
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setpenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getpenulis() {
        return $this->penulis;
    }

    public function setpenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getpenerbit() {
        return $this->penerbit;
    }

    public function setDiskon ($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }


    public function setHarga() {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga -  ($this->harga * $this->diskon / 100 );
    }

    //method
    public function getLabel() {   //akan menampilkan label judul. penerbit, dan harga secara langsung
        return "$this->penulis, $this->penerbit"; 
    }

    public function getIndo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;

    }
}
//spesifiknya perluasan fungsionalitasnya ada di class-class child nya

class komik extends produk implements Infoproduk{
    public $jmlHalaman;

    public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        //Pada saat kita memanggil parent nya, nilai defaulnya tidak perlu kita isi supaya tidak di isi ulang ( ditimpa )
        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoproduk() {
        $str = "Komik : " . $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
// :: ini merupakan method statik
class Game extends produk implements Infoproduk {
    public $waktuMain;

    public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {

        parent::__construct($judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }

    public function getInfoproduk(){ 
        $str = "Game : " . $this->getInfo() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk { //class tugasnya hanya satu yaitu mencetak seluruh info produk
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() { //Hanya memiliki 1 method dan didalam () akan kita isi parameter  untuk method ya dan parameternya adalah object yang sudah kita buat
        $str = "DAFTAR PRODUK : <br> ";

        foreach( $this->daftarProduk as $p) {
            $str .= " - {$p->getInfoproduk()} <br>";
        }
        return $str; 
        //fungsi ini " $str " akan mengembalikan nilai sebuah string
    }
}

$produk1 = new komik( " Upin dan Ipin", "kak rose", "Abang saleh", 5000, 100);
$produk2 = new Game( " Rownship", "Anton", "MSi komputer", 10000, 50);

$cetakProduk = new CetakInfoproduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>
