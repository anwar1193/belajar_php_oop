<?php  
    class orang{
        public $tinggi = 165;
        public $warna_kulit = 'Sawo Matang';
    }

    class pria extends orang{

    }

    $pria1 = new pria;

    echo $pria1->tinggi;
?>