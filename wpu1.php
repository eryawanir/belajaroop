<?php


/* Membuat Penjualan Produk
    - Game
    - Komik
*/

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    //constructor
    public function __construct($judul = "judul kosong", $penulis, $penerbit, $harga, $halaman, $durasi)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
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
    public function cetakSemua()
    {
        $str = "Komik : " . parent::cetakSemua() . " ~ {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function cetakSemua()
    {
        $str = "Game : " . parent::cetakSemua() . " - {$this->durasi} Jam.";
        return $str;
    }
}


class CetakInfoProduk
{   //harus objek dari kelas Produk=======(objek type)===================================
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->cetakLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//buat objek yg lengkap
$produk1 = new Komik("Naruto", "Penulisnya Naruto", "Shonen", 30000, 100, 0);
$produk2 = new Game("Counter Strike", "Pembuat Counterstrike", "Valve", 40000, 0, 50);

// Komik : Naruto | Penulisnya Naruto, Shonen (Rp. 30000) - 100 Halaman.
// Game : Counter Strike | Pembuat Counterstrike, Valve (Rp. 40000) ~ 50 Jam.

echo $produk1->cetakSemua();
echo "<br>";
echo $produk2->cetakSemua();
