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
    public function __construct($judul = "judul kosong", $penulis, $penerbit, $harga, $halaman, $durasi, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
        $this->tipe = $tipe;
    }

    public function cetakLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function cetakSemua()
    {
        $infoProduk = new CetakInfoProduk;
        $str = $infoProduk->cetak($this);

        $str = "{$this->tipe} : {$str} ";

        if ($this->tipe == "Game") {
            $str .= "~ {$this->durasi} Jam.";
        } elseif ($this->tipe == "Komik") {
            $str .= "~ {$this->halaman} Halaman.";
        }
        return $str;
    }
};


class CetakInfoProduk
{   //harus objek dari kelas Produk=======(objek type)===================================
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->cetakLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//buat objek yg lengkap
$produk1 = new Produk("Naruto", "Penulisnya Naruto", "Shonen", 30000, 100, 0, "Komik");
$produk2 = new Produk("Counter Strike", "Pembuat Counterstrike", "Valve", 40000, 0, 50, "Game");

// Komik : Naruto | Penulisnya Naruto, Shonen (Rp. 30000) - 100 Halaman.
// Game : Counter Strike | Pembuat Counterstrike, Valve (Rp. 40000) ~ 50 Jam.

echo $produk1->cetakSemua();
echo "<br>";
echo $produk2->cetakSemua();
