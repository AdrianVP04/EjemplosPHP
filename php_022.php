<!--BUCLE FOR
BUCLE: Estructura de programación que se usa para repetir un determinado código un número determinado de veces.
FOR: BUCLE que conocemos de antemano el número de veces que quiero repetir la acción
FOR lleva implicito tres parámetros: la inicialización, la condición y el incremento o decremento.
    for (inicialización; condición; incremento/decremento){
        bloque código
    }
-->
<?php

// Imprimir del 1 al 100 separado por comas y el 100 termina en punto.
for ($i = 1; $i <= 100; $i++) {
    // Si es el último número (100), imprime con un punto.
    if ($i == 100) {
        echo "$i."; 
    } else {
        // Si no es el último número, imprime con una coma.
        echo "$i, ";  
    }
}




// Imprimir del 1 al 100 separado por comas y el 100 termina en punto.
for ($i = 1; $i <= 100; $i++) {
    // Usamos un operador ternario para decidir si imprimir una coma o un punto al final
    $num = ($i == 100) ? "$i." : "$i, ";
    echo $num;
}
