<?php
$total = 0;

$fruit = 5000;
$orangeJuice = 10000;
$chicken = 20000;
$voucher = 5000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;
$total -= $voucher;

var_dump($total);