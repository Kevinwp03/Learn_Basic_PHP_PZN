<?php
$counter = 1;
while($counter <=10){
    echo "Ini adalah While loop ke- $counter".PHP_EOL;
    $counter++;
}
// Alternative While loop
$counter = 1;
while($counter <= 20):
    echo "Ini adalah Alternative While loop ke-$ $counter".PHP_EOL;
    $counter++;
endwhile;