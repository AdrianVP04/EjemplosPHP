<!--Ejercicio con BUCLE CENTINELA. Hay una variable que me dice si nos salimos del bucle.

Programa que escribe números aleatorios entre uno y quinientos y se para cuando el número sea múltiplo de 7
-->

<?php

$salir = false;

while (!$salir){ //!$salir vale true 
    $num =  rand(1,500);
    echo "$num <br>";
    $salir = ($num % 7 == 0);//el centinela vale verdadero si es multiplo de 7
    // if ($num % 7 == 0){
    //     $salir = true;
    // }
}