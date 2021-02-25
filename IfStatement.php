<?php

$nilai = 50;
$absend = 90;

if($nilai >= 80 && $absend >=80){
    echo "Nilai anda : A".PHP_EOL;
}else if($nilai >= 70 && $absend >= 70){
    echo "Nilai anda : B".PHP_EOL;
} else if($nilai >= 60 && $absend >= 60){
    echo "Nilai anda : C".PHP_EOL;
} else if($nilai >= 50 && $absend >= 50){
    echo "Nilai anda : D".PHP_EOL;
} else{
    echo "Nilai anda : E".PHP_EOL;
}

//Syntax Alternative
if($nilai >= 80 && $absend >=80):
    echo "Nilai anda : A".PHP_EOL;
elseif($nilai >= 70 && $absend >= 70):
    echo "Nilai anda : B".PHP_EOL;
elseif($nilai >= 60 && $absend >= 60):
    echo "Nilai anda : C".PHP_EOL;
elseif($nilai >= 50 && $absend >= 50):
    echo "Nilai anda : D".PHP_EOL;
else:
    echo "Nilai anda : E".PHP_EOL;
endif;