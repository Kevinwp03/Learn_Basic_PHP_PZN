<?php
function foo(){
    echo "Foo".PHP_EOL;
}
function bar(){
    echo "Bar".PHP_EOL;
}
//Variable Function
$variableFooYangAkanDipanggil = "foo";
$variableFooYangAkanDipanggil();
$variableBarYangAkanDipanggil = "bar";
$variableBarYangAkanDipanggil();

//Penggunaan Variable Function
function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName".PHP_EOL;
}
function sampleFunction (string $name): string{
    return "Sample $name";
}
sayHello("Kevin", "sampleFunction");
sayHello("Kevin", "strtoupper");
sayHello("Kevin", "strtolower");