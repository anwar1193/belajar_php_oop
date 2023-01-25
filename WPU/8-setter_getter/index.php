<?php

class Produk{
		private $judul,
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

    echo '<hr>';

    // masalah jika tanpa menggunakan visibility (semua public) :
    // 1. bisa mengubah nilai yang sudah ditetapkan sebelumnya dengan bebas, contoh mengubah harga produk2 yang awalnya 250000 jadi 5000 seperti di bawah ini :
    // $produk2->harga = 5000;
    // solusinya ubah visibility harga dari public menjadi protected/private, lalu supaya tetap bisa di panggil, buat method baru (disini contoh nya get_harga() ) -> jika protected, tambahkan fungsinya di kalas child (game) , tapi jika private, tambahkan fungsinya di kelas induk (Produk)

    // $produk2->diskon = 90; //gak boleh langsung akses dan ubah seenak nya

    $produk2->setDiskon(10);

    echo $produk2->getHarga(); //harga tetap bisa di tampilkan walaupun visibility nya protected

    // bagaimana jika harga kita ubah visibility nya jadi private? kita tinggal pindahkan method getHarga() ke class induk, yaitu produk
	
    echo '<hr>';

    $produk1->setJudul("Judul Baru");

    echo $produk1->getJudul();

    echo '<br>';

    $produk1->setPenulis("Munawar Ahmad");
    echo $produk1->getPenulis();

?>