<?php
//membuat array
$arrayBuah = ["Mangga","Alpukat","Anggur","Melon","Kelengkeng"];

//cara pertama
print_r ($arrayBuah);
echo "<br>";
//cara kedua
var_dump($arrayBuah);
echo "<br>";
//cara ketiga
foreach ($arrayBuah as $buah) {
    echo $buah ."<br>";
}