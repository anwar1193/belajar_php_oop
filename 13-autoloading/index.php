<?php  

require_once 'App/init.php';

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 222, 0);

$produk2 = new game("Death Note", "Aoyama Gosho", "Shikakuten", 250000, 55);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>