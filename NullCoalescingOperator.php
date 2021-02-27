<?php
$data =[
    "Action" => "Create",
    "Color" => "White"
];

if(isset($data["Action"])){
    $action = $data["Action"];
} else{
    $action = "Nothing";
}
echo $action.PHP_EOL;
// Mengunakan Null Coalescing Operator ??
$action2 = $data["Color"] ?? "Nothing";
echo $action2.PHP_EOL;
