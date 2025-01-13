<?php
    define("CIUDAD", "Madrid"); // La constante CIUDAD tendrá el valor "Madrid"

    if (defined("CIUDAD")) {
        print("La ciudad es: " . CIUDAD); // Concatenamos la constante con la cadena
    }
?>
