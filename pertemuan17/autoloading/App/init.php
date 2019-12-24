<?php
// cara manual (tanpa autoload)
// urutannya harus sesuai interface, class abstrak, dan turunannya
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// menggunakan autoload dengan fungsi spl_autoload_register()

spl_autoload_register(function( $class ) {
    require_once __DIR__ . "/Produk/" . $class . ".php";
});