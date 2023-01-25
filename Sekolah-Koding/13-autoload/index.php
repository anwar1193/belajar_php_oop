<!-- 
    Jika kita mempunyai class di file yang berbeda2, maka kita bisa menggunakan autoload (apalagi jika class nya banyak)

    SOAL :
    * Buat 2 buah class (di file terpisah dengan index, buat folder baru sekalian) dan property nya bebas
    * dengan autoload, sambungkan index dengan 2 class tsb sehingga index bisa akses 2 class tsb
 -->

<?php  
    // require_once 'class/mobil.php';
    // require_once 'class/orang.php';

    // Autoload / Pengganti require_once
    spl_autoload_register(function ($class_name){
        include 'class/'.$class_name.'.php';
    });

    $orangku = new orang;
    echo $orangku->suara;

    echo '<br>';

    $mobilku = new mobil;
    echo $mobilku->bbm;
?>