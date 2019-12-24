<?php

Abstract class Produk {
    protected $judul;
    protected $penulis;
    protected $penerbit;
    protected $harga;
    private $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // membuat celah setter karena visibility properti judul private
    public function setJudul( $judul ) {
        if( !is_string($judul) ) {
            throw new Exception("Judul harus text");
        }
        $this->judul = $judul;
    }

    // membuat celah getter karena visibility properti judul private
    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }
    
    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    } 
    
    // method abstract
    abstract public function getInfo();

}