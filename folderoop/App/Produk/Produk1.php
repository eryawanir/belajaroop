<?php 
abstract class Produk1
{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;


    //constructor
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }




    public function getJudul()
    {
        return $this->judul;
    }
    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }


    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }


    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }


    public function getHarga()
    {
        return $this->harga;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function cekHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }


    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }


    public function cetakLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function cetakSemuaInfo();
};
