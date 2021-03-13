<?php
// Kesalahan Default Argument Value
function sayHello($firtsName, $lastName = "") 
{
    echo "Hello $firtsName $lastName". PHP_EOL;
}
sayHello("Kevin");
sayHello("Kevin", "Williams");

// Tipe data Deklarasi 
function sum(int $first, int $last)
{
    $total = $first + $last;

    echo "Total $first + $last = $total". PHP_EOL;
}
sum(100, 100);
sum("100", "100");
sum(true, false);

//Variable-length Argument List
function sumAll(...$values){
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " .implode(", ", $values). " = $total" . PHP_EOL;
}
$values = [1,2,3,4,5,6];
sumAll(1, 2, 3, 4, 5);
sumAll(...$values); //array $values akan di konversi menjadi Argumen list
