<?php

class Nama
{
    public static $numWord = 2;
    public static function buatNama()
    {
        //self mirip this
        self::$numWord += 2;
        return "Jumlah Nama " . self::$numWord . " Kali <br>";
    }
    public  $numWod = 2;
}
//kita ga perlu new ( gaperlu bikin objek)
echo "<hr>";
Nama::$numWord = 10;
echo Nama::$numWord;
echo "<hr>";

echo Nama::buatNama();
echo Nama::buatNama();
echo Nama::buatNama();

//Alasan menggunakan static keyword yang pertama yaitu tidak perlu 
//dilakukan pemanggilan objek secara berulang-ulang dan hasl ini lebih 
//menghemat penulisan kode program.

$eryawan = new Nama;
echo "<hr>";
echo $eryawan->buatNama();
echo $eryawan->buatNama();
echo "<hr>";


echo Nama::buatNama();
echo Nama::buatNama();
echo Nama::buatNama();

echo "<hr>";
echo "<hr>";
echo $eryawan->buatNama();
//Selain itu nilai sebuah nilai yang ada di property nilai nya 
//tidak akan berubah-ubah ketika terdapat banyak pemanggilan terhadap property
var_dump($eryawan);
