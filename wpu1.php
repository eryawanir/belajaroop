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
    public function __construct($judul = "judul kosong", $penulis, $penerbit, $harga)
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
};


class CetakInfoProduk
{   //harus objek dari kelas Produk================================================
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->cetakLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

//buat objek yg lengkap
$produk1 = new Produk("Naruto", "ya Penulisnya Naruto", "Shonen", 30000);
$produk2 = new Produk("Counter Strike", "ya yg bikin cs", "Valve", 40000);


echo $produk1->cetakLabel();
echo "<hr>";
echo $produk2->cetakLabel();
echo "<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
