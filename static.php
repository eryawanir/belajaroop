<?php

class Nama
{
    public static $numWord = 2;
    public static function buatNama()
    {
        self::$numWord += 2;
        return "Jumlah Nama " . self::$numWord . " Kali <br>";
    }
    public  $numWod = 2;
}
echo "<hr>";
Nama::$numWord = 10;
echo Nama::$numWord;
echo "<hr>";

echo Nama::buatNama();
echo Nama::buatNama();
echo Nama::buatNama();

$eryawan = new Nama;
var_dump($eryawan);
