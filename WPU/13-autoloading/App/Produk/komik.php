<?php  

class komik extends Produk implements infoProduk{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->ambil_property()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : ".$this->getInfo()." - {$this->jmlHalaman} Halaman."; //teknik overriding (menggunakan parent) untuk mengambil method parent nya
        return $str;
    }
}

?>