<?php
require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// cara menginstansiasi namespace
// struktur menulis namespace Vendor\Namespace\Subnamespace
// new App\Service\User();

// Menggunakan alias dengan keyword use
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();