<?php

function hitungUmur($tahunLahir){
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2004);
echo "<br>";
hitungUmur(1994);
echo "<br>";
hitungUmur(2003);
echo "<br>";
hitungUmur(2001);
echo "<br>";

function welcome($nama = "Kayla")
{
    echo "Hello, selamat datang $nama!";
}
welcome("Kayla");