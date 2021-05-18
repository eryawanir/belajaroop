<?php 
class Komik extends Produk1 implements InfoProduk
{
    public $halaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }
    public function cetakSemua()
    {
        $str = "Komik : " . $this->cetakSemuaInfo() . " (Rp. " . $this->getHarga() . ") ~ {$this->halaman} Halaman.";
        return $str;
    }
    public function cetakSemuaInfo()
    {
        $infoProduk = new CetakInfoProduk;
        $str = $infoProduk->cetak($this);

        return $str;
    }
}
