<!--  
    SOAL :
    * Buat sebuah class dengan nama : robot
    * Di dalam class tsb, buat 2 buah property
        property pertama : suara, nilainya : "Bip Bip Bip"
        property kedua : berat, nilainya : 30
    * Akses class robot tsb dari luar & menampilkan Output : "Suara Robot Bip Bip Bip , Beratnya : 30 kg"
-->

<?php  

    // Class
    class robot{
        public $suara = "Bip Bip Bip"; // property
        public $berat = 30; // property
    }

    $robot1 = new robot; // $robot sekarang adalah objek

    echo 'Suara Robot '.$robot1->suara.' , Beratnya : '.$robot1->berat.' kg';

?>