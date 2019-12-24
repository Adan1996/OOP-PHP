<?php
// cara manual (tanpa autoload)
// urutannya harus sesuai interface, class abstrak, dan turunannya
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// menggunakan autoload dengan fungsi spl_autoload_register()

spl_autoload_register(function( $class ) {

    $class = explode('\\', $class); // explode merubah karakter \ menjadi array App\Produk\User = ["App", "Produk", "User"];
    $class = end($class); // mengambil element terakhir dari yang sudah diexplode
    require_once __DIR__ . "/Produk/" . $class . ".php";
});

spl_autoload_register(function( $class ) {

    $class = explode('\\', $class); // explode merubah karakter \ menjadi array App\Produk\User = ["App", "Produk", "User"];
    $class = end($class); // mengambil element terakhir dari yang sudah diexplode
    require_once __DIR__ . "/Service/" . $class . ".php";
});