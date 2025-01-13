<?php
    //define("CIUDAD", "Madrid"); // La constante CIUDAD tendría el valor "Madrid"

    if (defined("CIUDAD")) {
        print("La ciudad es: " . CIUDAD); // Concatenamos la constante con la cadena
    } else {
        print("La constante ciudad no está definida");
    }
?>
