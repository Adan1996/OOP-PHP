<?php

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalaman;
    public $waktuMain;
    public $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // Komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman";
        }else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam";
        }
        return $str;
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


$produk1 = new Produk("Naruto", "Masashi Khisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

// Komik : Masashi Khisimoto, Shonen Jump
// Game : Neil Druckmann, Sony Computer
// Naruto | Masashi Khisimoto, Shonen Jump (Rp. 30000)


// Komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
echo $produk1->getInfoLengkap();
echo "<br>";
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Halaman
echo $produk2->getInfoLengkap();