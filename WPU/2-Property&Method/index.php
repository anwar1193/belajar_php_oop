<?php  

	class Produk{
		public $judul = "judul", //nilai default
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0;

		public function hello(){
			return "Hello World";
		}

		public function ambil_penulis(){
			return $this->penulis; //$this supaya variable/property nya bisa di panggil
		}
	}

	$produk1 = new Produk();
	$produk1->judul = "Naruto";
	$produk1->penulis = "Masashi Kihimoto";
	$produk1->penerbit = 'Shoenen Jump';
	$produk1->harga = 300000;

	var_dump($produk1);

	echo "<br><br>";

	$produk2 = new Produk();
	$produk2->semboyan = "Habis Gelap Terbitlah Terang";

	var_dump($produk2);

	echo "<br><br>";

	echo "Komik ".$produk1->judul." penulis adalah ".$produk1->penulis;

	echo "<br><br>";

	echo $produk1->hello();

	echo "<br><br>";

	echo "Penulisnya : ".$produk1->ambil_penulis();

?>