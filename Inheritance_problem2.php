<?php
//parents
class Mobil {
    public $nama, $merek, $warna,
           $kecepatanMaksimal,
           $jumlahPenumpang;

    public function tambahkecepatan() {
        return "kecepatan bertambah!";
    }
}
//child
class MobilSport extends Mobil {  //Keywords nya adalah extends
    public $turbo = false;

    public function jalankanTurbo() {
        $this->turbo = true;
        return "Turbo dijalankan!";
    }
}

$mobil1 = new Mobilsport();
echo $mobil1->tambahkecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();

?>