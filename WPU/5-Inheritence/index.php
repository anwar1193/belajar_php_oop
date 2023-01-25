<?php

class Produk{
		public $judul,
				$penulis,
				$penerbit,
				$harga,
                $jmlHalaman,
                $waktuMain;

		// Constructor
		public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain){

			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;

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
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->ambil_property()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    class game extends Produk{
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->ambil_property()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
            return $str;
        }
    }

	$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 222, 0);

	$produk2 = new game("Death Note", "Aoyama Gosho", "Shikakuten", 250000, 0, 55);

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
    // Game : Death Note | Aoyama Gosho, Sony Computer (Rp 25000) - 50 Jam

    echo $produk1->getInfoProduk();
    echo '<br><br>';
    echo $produk2->getInfoProduk();
	
?>