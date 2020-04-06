<?php

    $i = 1;
    echo "Petla while: ";
    while ($i < 16)
    {
        if($i == 15) echo $i;
        else echo $i .", ";
        $i++;
    }

    echo "\n";
    echo "Petla for: ";
    for ($i = 1; $i < 16; $i++){
        if($i == 15) echo $i;
        else echo $i .", ";
    }

    echo "\n";
    echo "Petla foreach: ";
    $tablica = range(1, 15);
    foreach ($tablica as $wartosc){
        if($wartosc == 15) echo $wartosc;
        else echo $wartosc .", ";
    }
?>