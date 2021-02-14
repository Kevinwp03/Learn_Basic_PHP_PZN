<?php 
$first = [
    "firstName" => "Kevin"
];

$last = [
    "lastName" => "Williams"
];

$full = $first + $last;
var_dump($full);

$a = [
    "firstName" => "Kevin",
    "lastName" => "Williams" 
];

$b = [
    "lastName" => "Williams",
    "firstName" => "Kevin"
];

var_dump($a == $b);
var_dump($a === $b); // mengidentifikasi urutan dan kesamaan
var_dump($a !== $b); // lawannya ===
