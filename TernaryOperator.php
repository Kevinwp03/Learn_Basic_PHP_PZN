<?php
$gender = "PRIA";
$hi = null;
$hiTernary = null;

if($gender = "PRIA"){
    $hi = "Hello bro!";
} else{
    $hi = "Hi Nona";
}
echo $hi . PHP_EOL;
// Ternary Statement
$hiTernary = $gender? "Hello Broku!": "Hello Nona";
echo $hiTernary.PHP_EOL;