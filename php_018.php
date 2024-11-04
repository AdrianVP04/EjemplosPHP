<?php
//if normal
    $a = 1;
    $b = 5;
    if ($a > $b) {
        echo "$a es mayor que $b"."<br>";
    } else{
        echo "$a es menor que $b" . "<br>";
    }

//if con operador ternario. La ? es "entonces(if)" y  los ":" es "sino(else)"
    $resultado = ($a > $b) ? "$a es mayor que $b con ternario" : "$a es menor que $b con ternario";
    echo $resultado;