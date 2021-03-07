<?php
$names = ["Kevin", "Williams", "Permana"];
//for biasa
for ($i=0; $i < count($names) ; $i++) { 
    echo "Data ke-$i = $names[$i]".PHP_EOL;
}
//ForEach, jika tidak butuh data index
foreach($names as $name){
    echo "Data $name".PHP_EOL;
}
//ForEach, jika ingin mengambil data index
foreach($names as $index => $name){
    echo "Data ke-$index = $name\n";
}
//ForEach dengan Key
$person = [
    "first_name" => "Kevin",
    "middle_name" => "Williams",
    "last-name" => "Permana",
];
foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}