<?php

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    protected $diskon = 0;
    private $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // karena visibility private hanya bisa digunakan dalam sebuah class tertentu, maka buat method setDiskon dalam class yang ada propertinya tersebut (Produk)
    // public function setDiskon($diskon) {
    //     $this->diskon = $diskon;
    // }
    
    // karena visibility private hanya bisa digunakan dalam sebuah class tertentu, maka buat method getHarga dalam class yang ada propertinya tersebut (Produk)
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
        parent::__construct( $judul, $penulis, $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }

    // karena visibility protected hanya bisa digunakan di class beserta turunannya saja, maka buat method setDiskon dalam salah satu class turunannya
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // karena visibility protected hanya bisa digunakan di class beserta turunannya saja, maka buat method getHarga dalam salah satu class turunannya
    // public function getHarga() {
    //     return $this->harga;
    // }

    public function getInfoProduk() {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
// mengakses property dari class produk dengan visibility public
// $produk2->harga = 5000;
$produk2->setDiskon(50);
echo $produk2->getHarga();