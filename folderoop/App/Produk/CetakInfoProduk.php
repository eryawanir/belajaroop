<?php 
class CetakInfoProduk
{   //harus objek dari kelas Produk=======(objek type)===================================
    public function cetak(Produk1 $produk)
    {
        $str = $produk->getJudul() . " | {$produk->cetakLabel()}";
        return $str;
    }
}
