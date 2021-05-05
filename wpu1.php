<?php


/* Membuat Penjualan Produk
    - Game
    - Film
*/

class Produk
{
    public $judul = "judul kosong",
        $penulis = "tidak diketahui",
        $penerbit = "ga ada",
        $harga = 0;
};

$produk1 = new Produk;
$produk1->judul = "Naruto";

$produk2 = new Produk;
$produk2->judul = "Counter Strike";

var_dump($produk1, $produk2);
