<?php
    //funtcion isset
    //Comprueba si una variable esta configurada, es decir, está declarada y no es NULL. En este caso devuelve 1
    //En caso contrario devuelve 0.
    $var1 = 4;
    if(isset($var1)){
        print("La variable var1 esta inicializada y no es null. Su valor es: ".$var1);
    }else{
        print("La variable var1 no esta inicializada");
    }