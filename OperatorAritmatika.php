<?php
$a = 10;
$b = 10;
$c = 3;

// penambahan
echo "penambahan : ";
$result = $a + $b;
var_dump($result);

// mengubah hasil menjadi negatif
echo "Nilai menjadi negatif : ";
$resultNegatif = -$result;
var_dump($resultNegatif);

//mengubah hasil menjadi positif
echo "Nilai menjadi positif : ";
$resultPositif = +$resultNegatif;
var_dump($resultPositif);

// bilangan berpangkat
echo "Perpangkatan : ";
$pangkat = $result ** $b;
var_dump($pangkat);

//Modulo
echo "Sisa Bagi / Modulo : ";
$modulo = $result % $c;
var_dump($modulo);
