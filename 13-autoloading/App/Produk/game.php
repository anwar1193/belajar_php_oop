<?php  

class game extends Produk implements infoProduk{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->ambil_property()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ".$this->getInfo()." - {$this->waktuMain} Jam.";
        return $str;
    }
}

?>