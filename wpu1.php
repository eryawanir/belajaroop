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
    public $judul,
        $penulis,
        $penerbit,
        $diskon = 0;
    protected $harga;

    //constructor
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
        $str = "Komik : " . parent::cetakSemua() . " (Rp. {$this->harga}) ~ {$this->halaman} Halaman.";
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
        return $this->harga;
    }
    public function cetakSemua()
    {
        $str = "Game : " . parent::cetakSemua() . " (Rp. {$this->harga}) - {$this->durasi} Jam.";
        return $str;
    }
}


class CetakInfoProduk
{   //harus objek dari kelas Produk=======(objek type)===================================
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->cetakLabel()}";
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
echo $produk2->cetakHargaProtected();
