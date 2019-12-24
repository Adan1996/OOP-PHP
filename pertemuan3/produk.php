<?php

// Jualan Produk
// Komik
// Game

class Produk {
    // Property
    // sesuatu yang merepresentasikan data / keadaan dari sebuah object
    // variable yang ada di dalam object (member variable)
    // sama seperti variable pada PHP, ditambah dengan visibility di depannya (public, private, & protected)
    public $judul = 'judul';
    public $penulis = 'penulis';
    public $penerbit = 'penerbit';
    public $harga = 0;


    // Method
    // merepresentasikan prilaku dalam sebuah object
    // function yang ada di dalam object
    // sama seperti variable pada PHP, ditambah dengan visibility di depannya (public, private, & protected)

    public function sayHello() {
        return "Hello World";
    }

    public function getLabel() {
        // untuk mengambil properti yang ada di dalam class harus menggunakan keyword THIS
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// var_dump($produk2->judul);

// instansiasi object
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// Contoh print dari object
// echo "Komik : $produk3->judul, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// instansiasi object
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();