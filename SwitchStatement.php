<?php
$nilai = "A";

if ($nilai == "A" ){
    echo "Anda lulus dengan nilai yang baik";
} elseif ($nilai == "B" || $nilai == "C"){
    echo "Anda lulus";
} elseif ($nilai == "D"){
    echo "Mungkin anda salah jurusan";
}

//Switch Statement 
switch($nilai):
    case "A":
        echo "Anda lulus dengan nilai yang baik";
        break;
    case "B":
    case "C":
        echo "Anda lulus";
        break;
    case "D":
        echo "Mungkin anda salah jurusan";        
    endswitch;