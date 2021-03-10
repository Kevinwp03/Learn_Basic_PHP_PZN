<?php
goto a;
echo "Hello World".PHP_EOL;
a:
echo "Hello A". PHP_EOL;

//Goto for Loop
$counter = 1;

while(true){
    echo "Ini adalah counter ke-$counter".PHP_EOL;
    $counter++;
    if($counter > 10){
        goto end;
    }
}
end:
echo "End Loop";