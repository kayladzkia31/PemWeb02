<?php
$arrayBuah = ["Mangga","Alpukat","Anggur","Melon","Kelengkeng"];

//fungsi sort untuk mengurutkan value dari aray(abjad)
sort($arrayBuah);

//fungsi array pop untuk menghapus value array yang paling belakang(terakhir)
array_pop($arrayBuah);

//fungsi unset menghapus spesifik value pada array
unset ($arrayBuah[3]);

//fungsi array push untuk menambahkan 1 value array paling belakang
array_push($arrayBuah,'Durian');

//fungsi array shift untuk menghapus value array yang paling depan
array_shift($arrayBuah);

//fungsi array unshift menambahkan value array di paling depan
array_unshift($arrayBuah,"Buah Naga");

//mengubah value array tertentu
$arrayBuah[2] = "Pisang";

foreach ($arrayBuah as $buah) {
    echo $buah ."<br>";
}