<?php
function sayHello(){
    echo "Hello function" . PHP_EOL;
}
sayHello();
sayHello();

// Function if Statement
$buat = true; // jika false, maka akan error
if($buat){
    function Hi(){
        echo "Function Hi dieksekusi" . PHP_EOL;
    }
}
Hi();
Hi();