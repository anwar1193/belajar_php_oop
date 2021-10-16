<?php

class Produk{
		public $judul,
				$penulis,
				$penerbit,
				$harga;

		// Constructor
		public function __construct($judul, $penulis, $penerbit, $harga){

			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;

		}

		public function ambil_property(){
			//$this supaya variable/property nya bisa di panggil
			return "$this->penerbit, $this->penulis"; 
		}

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->ambil_property()} (Rp. {$this->harga})";
            return $str;
        }
	}

    class komik extends Produk{
        public $jmlHalaman;

        public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk(){
            $str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman."; //teknik overriding (menggunakan parent) untuk mengambil method parent nya
            return $str;
        }
    }

    class game extends Produk{
        public $waktuMain;

        public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk(){
            $str = "Game : ".parent::getInfoProduk()." - {$this->waktuMain} Jam.";
            return $str;
        }
    }

	$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 222, 0);

	$produk2 = new game("Death Note", "Aoyama Gosho", "Shikakuten", 250000, 55);

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
    // Game : Death Note | Aoyama Gosho, Sony Computer (Rp 25000) - 50 Jam

    echo $produk1->getInfoProduk();
    echo '<br><br>';
    echo $produk2->getInfoProduk();
	
?>