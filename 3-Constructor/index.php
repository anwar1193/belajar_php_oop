<?php  

	class Produk{
		public $judul,
				$penulis,
				$penerbit,
				$harga;

		// Constructor
		public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){

			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;

		}

		public function ambil_property(){
			//$this supaya variable/property nya bisa di panggil
			return "$this->judul, $this->penulis, $this->penerbit, $this->harga"; 
		}
	}

	$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);

	$produk2 = new Produk("Death Note", "Aoyama Gosho", "Shikakuten", 250000);

	echo 'Produk 1 : '.$produk1->ambil_property();
	echo "<br><br>";

	echo 'Produk 2 : '.$produk2->ambil_property();
	
?>