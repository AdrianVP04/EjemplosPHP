<?php
    //funtcion isset. Devuelve 1 si esta definida la variable. 0 en caso contrario
    //Comprueba si una variable esta definida y no es NULL
    //El valor NULL representa una variable SIN VALOR. 
    $var1 = 4;
    if(isset($var1)){
        print("La variable var1 esta inicializada y no es null. Su valor es: ".$var1);
    }else{
        print("La variable var1 no esta configurada");
    }

    echo "<br>";

    $var2 = null;
    if(isset($var2)){
        print("La variable var2 esta inicializada y no es null. Su valor es: ".$var2);
    }else{
        print("La variable var2 no esta definida y su valor es NULL");
    }
