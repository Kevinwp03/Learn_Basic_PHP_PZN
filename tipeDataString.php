<?php
echo 'Name : ';
echo 'Kevin williams permana';
echo "\n";

echo "Name : ";
echo "Kevin \t Williams \t Permana \n"; 

echo <<<TEXT
Teks ini menggunakan HeroDoc untuk 
membuat lebih dari satu baris
ini adalah cara ke-3
Membuat String  \n\n
TEXT;

echo <<<'TEXT'
Teks ini menggunakan Nowdoc
ini adalah cara ke-4
"Membuat String" 
TEXT;
