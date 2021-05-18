<?php 
class Game extends Produk1 implements InfoProduk
{
    public $durasi;
    public function __construct($judul, $penulis, $penerbit, $harga, $durasi)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }
    public function cetakHargaProtected()
    {
        return $this->getHarga();
    }
    public function cetakSemua()
    {
        $str = "Game : " . $this->cetakSemuaInfo() . " (Rp. " . $this->getHarga() . ") - {$this->durasi} Jam.";
        return $str;
    }
    public function cetakSemuaInfo()
    {
        $infoProduk = new CetakInfoProduk;
        $str = $infoProduk->cetak($this);

        return $str;
    }
}
