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

//buat objek yg lengkap
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "ya penulisnya naruto";
$produk3->penerbit = "Shonen";
$produk3->harga = "30000";

echo "Komik : $produk3->penulis, $produk3->penerbit";
