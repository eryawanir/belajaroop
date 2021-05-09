<?php


/* Membuat Penjualan Produk
    - Game
    - Komik
*/

/* visibility -> property dan method
@public dapat digunakan dimana saja
@protected hanya dapat digunakan di dalam kelas beserta turunanya
@private hanya didalam kelas tertentu saja
*/
class Produk
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

    public function cetakSemua()
    {
        $infoProduk = new CetakInfoProduk;
        $str = $infoProduk->cetak($this);

        return $str;
    }
};


class Komik extends Produk
{
    public $halaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }
    public function cetakSemua()
    {
        $str = "Komik : " . parent::cetakSemua() . " (Rp. " . $this->getHarga() . ") ~ {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $durasi;
    public function __construct($judul, $penulis, $penerbit, $harga, $durasi)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }
    public function cetakHargaProtected()
    {
        return $this->getHarga();
    }
    public function cetakSemua()
    {
        $str = "Game : " . parent::cetakSemua() . " (Rp. " . $this->getHarga() . ") - {$this->durasi} Jam.";
        return $str;
    }
}


class CetakInfoProduk
{   //harus objek dari kelas Produk=======(objek type)===================================
    public function cetak(Produk $produk)
    {
        $str = $produk->getJudul() . " | {$produk->cetakLabel()}";
        return $str;
    }
}

//buat objek yg lengkap
$produk1 = new Komik("Naruto", "Penulisnya Naruto", "Shonen", 30000, 100);
$produk2 = new Game("Counter Strike", "Pembuat Counterstrike", "Valve", 40000, 50);

// Komik : Naruto | Penulisnya Naruto, Shonen (Rp. 30000) - 100 Halaman.
// Game : Counter Strike | Pembuat Counterstrike, Valve (Rp. 40000) ~ 50 Jam.

echo $produk1->cetakSemua();
echo "<br>";
echo $produk2->cetakSemua();
echo "<hr>";


$produk1->setDiskon(10);
var_dump($produk1);
echo $produk1->cekHarga();

echo "<hr>";
echo $produk1->getPenerbit();
