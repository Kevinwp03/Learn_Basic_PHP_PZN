<?php
 $name = "Kevin";
 $name = null; // datanya berubah menjadi null

 $age = null;

 echo "Name : ";
 echo $name;
 echo "\n";

 echo "Age : ";
 echo $age;
 echo "\n";

 echo "Variable is null : ";
 var_dump(is_null($name));
 echo "\n";

 $contoh = "Kevin";
 unset($contoh); // Variable akan terhapus dan sudah tidak bisa dipanggil 
 // untuk mengecek varianle disarankan menggunakan isset
 var_dump(isset($contoh));
