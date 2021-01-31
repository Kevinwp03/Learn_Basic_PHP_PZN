<?php

$values = array(10, 8, 7.5, 6, 5.5);

$names = ["Kevin", "Williams", "Permana"];
var_dump($names);

var_dump($names[1]);

//Mengganti nilai dalam array
$names[0] = "Budi";
var_dump($names);

//Menghapus array
unset($names[1]);
var_dump($names);
//menambahkan array dalam variable
$names[] = "Joko";
var_dump($names);
//Menghitung jumlah data array
var_dump(count($names)); //Output : int(3)

//Membuat Map (Key Value Map)
$toko = array(
    "id"    => "ucup",
    "name"  => "slamet",
    "age"   => 30
);
var_dump($toko["id"]);

echo "\n";

$warung = [
    "id"    => "ucok",
    "name"  => "jambrut",
    "age"   => 20,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($warung["name"]);
var_dump($warung["address"]["country"]);
