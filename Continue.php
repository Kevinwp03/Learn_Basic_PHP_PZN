<?php
for ($country = 0; $country <= 100 ; $country++) { 
    if($country % 2 == 1){
        continue;
    }
    echo "ini adalah for while ke-$country\n";
}
