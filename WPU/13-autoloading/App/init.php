<?php  

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduk.php';

spl_autoload_register(function($class){
    // require_once 'Produk/'. $class. '.php';
    require_once __DIR__.'/Produk/'. $class. '.php';
});

?>