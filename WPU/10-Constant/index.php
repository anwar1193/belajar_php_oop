<?php  

    // 1.Menulis Constant

    // define('NAMA', 'Munawar Ahmad');

    // echo NAMA;

    // echo "<br>";

    // const UMUR = 27;

    // echo UMUR;

    // ......................................... 

    // 2.Contoh penggunaan constant pada OOP

    // class coba {
    //     const NAMA = 'Munawar Ahmad';
    // }

    // echo coba::NAMA;

    // ......................................... 

    // 3.Magic Constant dan kegunaan nya

    echo __LINE__; echo "<br>"; // mengetahui ada di baris berapa __LINE__ ini ditulis
    echo __FILE__; echo "<br>"; // mengetahui lokasi penyimpanan file tempat baris ini ditulis

    function iniFungsi(){
        return __FUNCTION__;
    }

    echo iniFungsi(); echo "<br>"; // mengetahui ada di dalam fungsi mana __FUNCTION__ ini berada

    class iniClass{ // mengetahui ada di class mana __CLASS__ ini berada
        public $kelas = __CLASS__;
    }

    $obj = new iniClass;
    echo $obj->kelas;


?>