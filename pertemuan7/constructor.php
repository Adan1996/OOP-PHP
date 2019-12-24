<?php

// Jualan Produk
// Komik
// Game

class Produk {
    // Property (dari class)
    // sesuatu yang merepresentasikan data / keadaan dari sebuah object
    // variable yang ada di dalam object (member variable)
    // sama seperti variable pada PHP, ditambah dengan visibility di depannya (public, private, & protected)
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;


    
    // Magic Method / Method Spesial yang dimiliki PHP
    // Construct
                                // variable lokal
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    // Method
    // merepresentasikan prilaku dalam sebuah object
    // function yang ada di dalam object
    // sama seperti variable pada PHP, ditambah dengan visibility di depannya (public, private, & protected)
    public function getLabel() {
        // untuk mengambil properti yang ada di dalam class harus menggunakan keyword THIS
        return "$this->penulis, $this->penerbit";
    }

}

// instansiasi object
$produk3 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Masashi Kisimoto";
// $produk3->penerbit = "Shonen Jump";
// $produk3->harga = 30000;

// instansiasi object
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
// $produk4->judul = "Uncharted";
// $produk4->penulis = "Neil Druckmann";
// $produk4->penerbit = "Sony Computer";
// $produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
$produk5 = new Produk();
$produk5->judul = "Dragon Ball";
var_dump($produk5);