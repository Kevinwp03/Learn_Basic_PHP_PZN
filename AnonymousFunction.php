<?php
$sayHello = function (string $name){
    echo "Hello $name".PHP_EOL;
};

$sayHello("Kevin");
$sayHello("Eko");

// Anonymous Function sebagai Argument
function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName".PHP_EOL;
}

sayGoodBye("Kevin", function (string $name){
    return strtoupper($name);
});

$filteFunction = function(string $name){
    return strtoupper($name);
};
sayGoodBye("Eko", $filteFunction);

// Mengakses Variable di luar Closure
$firstName = "Kevin";
$lastName = "Williams";

$sayHelloKevin = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName".PHP_EOL;
};
$sayHelloKevin();
