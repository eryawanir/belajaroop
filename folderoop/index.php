<?php

require_once 'App/Init.php';
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
echo "<hr>";
echo "<hr>";

$percetakan1 = new CetakInfoProdukArray;
$percetakan1->tambahProduk($produk1);
$percetakan1->tambahProduk($produk2);
var_dump($percetakan1);
echo $percetakan1->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

echo "<br>";
new ProdukUser();
echo "<br>";
new ServiceUser();
