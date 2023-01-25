<?php

interface infoProduk{
    public function getInfoProduk();
}

abstract class Produk{ //ubah jadi abstract
		protected $judul,
				$penulis,
				$penerbit,
                $harga,
                $diskon;

		// Constructor
		public function __construct($judul, $penulis, $penerbit, $harga){

			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;

		}

        public function setJudul($judul){ //contoh setter
            $this->judul = $judul;
        }

        public function getJudul(){ // contoh getter
            return $this->judul;
        }

        public function setPenulis($penulis){ 
            $this->penulis = $penulis;
        }

        public function getPenulis(){
            return $this->penulis;
        }

        public function setPenerbit($penerbit){
            $this->$penerbit = $penerbit;
        }

        public function getPenerbit(){
            return $this->penerbit;
        }

        public function setHarga($harga){
            $this->$harga = $harga;
        } 

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function setDiskon($diskon){
            $this->diskon = $diskon;
        }

        public function getDiskon(){
            return $this->diskon;
        }

		public function ambil_property(){
			//$this supaya variable/property nya bisa di panggil
			return "$this->penerbit, $this->penulis"; 
		}
        
        abstract public function getInfo();

	}

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

    class cetakInfoProduk{
        public $daftarProduk = array();

        public function tambahProduk(Produk $produk){
            $this->daftarProduk[] = $produk;
        }

        public function cetak(){
            $str = "DAFTAR PRODUK : <br>";

            foreach($this->daftarProduk as $p){
                $str .= "- {$p->getInfoProduk()} <br>";
            }

            return $str;
        }
    }

	$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 222, 0);

	$produk2 = new game("Death Note", "Aoyama Gosho", "Shikakuten", 250000, 55);
 
    $cetakProduk = new cetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();

    

?>