<?php 
class CetakInfoProdukArray
{
    public $daftarProduk = [];
    public function tambahProduk(Produk1 $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR INFO PRODUK<br>";

        foreach ($this->daftarProduk as $produk) {
            $str .= "-{$produk->cetakSemua()}<br>";
        }

        return $str;
    }
}
