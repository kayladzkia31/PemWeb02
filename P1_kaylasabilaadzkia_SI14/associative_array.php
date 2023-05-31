<?php
//membuat array associative
$profileArray = [
    "nama"=>"Kayla Sabila Adzkia",
    "kelas"=>"SI14"
];

// print_r($profileArray);

$profileMultiArray =[
    [
    'nama' => 'siti',
    'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XITK3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPL3'
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama']. "<br>";
}

// foreach($profileArray as $profile){
//     echo $profileArray['nama'];
// }