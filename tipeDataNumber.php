<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111);

echo "Underscore in Number : ";
var_dump(10_000_000_000); // to make it easier to read number

// Float
echo "Floating : ";
var_dump(1.234); // automaticaly the type of code change from integer to Float

echo "Floating point dengan E notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore In Floating Point : ";
var_dump(12_354.7);

echo "Integer overvlow : ";
var_dump(9223372036854775808); // if data telah melebihi nilai max int maka secara otomatis data berubah atau konversi menjadi float