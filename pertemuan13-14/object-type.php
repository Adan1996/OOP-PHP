<?php

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// object type
class CetakInfoProduk {
                        // parameter berupa object yang sudah diinstansiasi
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "<b>Hasil dari menjalankan method getLabel() di class Produk</b>";
echo "<br>";
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
// instansiasi object type
echo "<b>Hasil dari menjalankan method cetak() di class CetakInfoProduk</b>";
echo "<br>";
$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);