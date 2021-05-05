<?php


/* Membuat Penjualan Produk
    - Game
    - Komik
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

//bikin properti baru
$produk2->propertiBaru = "isi Properti Baru";

var_dump($produk1, $produk2);
var_dump($produk1, $produk2);
