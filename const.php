<?php
define("NAMA", "Muhammad Eryawan");
echo "<hr>";
echo NAMA;

class Konstanta
{
    const NAMA = "Muhammad";
    public static $file = __FILE__;
}
echo "<hr>";
echo Konstanta::NAMA;
echo "<hr>";
echo Konstanta::$file;
