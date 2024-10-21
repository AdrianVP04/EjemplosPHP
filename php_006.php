<?php
    //define("CIUDAD", "Madrid"); //La variable ciudad tendra el valor Madrid.

    if (defined("CIUDAD")){
        print("La ciudad es: "+ .CIUDAD)
    }else{
        print("La constante ciudad no esta definida")
    }

