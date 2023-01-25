<!-- 
    SOAL :
    * Buat sebuah class bernama : "mobil"
    * Di dalam class mobil tsb, buat
        > 1 property : warna, nilainya : "Merah"
        > 1 method : warna mobil, yang mengembalikan nilai dari property warna
    * Akses class mobil tsb dari luar & menampilkan output : "Warna mobilku Merah"
 -->
<?php  
    // Class
    class mobil{ 
        public $warna = 'Merah'; // property

        public function warna_mobil(){ // method
            return $this->warna;
        }
    }

    $mobilku = new mobil;
    echo 'Warna mobilku '.$mobilku->warna_mobil();

    echo '<br>';

?>


<!-- 
    SOAL :
    * Buat sebuah class bernama : "gedung"
    * Di dalam class gedung, buat 1 method dengan nama : "tinggi_gedung" yang bisa tampung 1 parameter
    * akses class gedung tsb dari luar & menampilkan output : "Aku punya gedung yang tingginya : 30 meter"
 -->

 <?php  
    class gedung{
        public function tinggi_gedung($tinggi){
            return $tinggi;
        }
    }

    $gedungku = new gedung;
    echo 'Aku punya gedung yang tingginya : '.$gedungku->tinggi_gedung(30).' meter';
 ?>