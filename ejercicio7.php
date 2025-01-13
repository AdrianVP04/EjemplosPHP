<?php	

// Arrays multidimensionales (matrices)
// Declaración e inicialización
$m1[0] [0]=1;
$m1[0] [1]=2;
$m1[1] [0]=3;
$m1[1] [1]=4;
echo "Array Multidimensión m1: (",print_r($m1),")<br><br>";

// Array multidimensión asociativo
// Inicialización
$poblacion["Alemania"] ["Berlín"]=12000;
$poblacion["España"] ["Madrid"]=4100000;
$poblacion["Alemania"]["Colonia"]=22000;
$poblacion["España"]["Barcelona"]=2100000;
$poblacion["Alemania"]["Franfourt"]=2345;
echo "Array Asociativo Población: (",print_r($poblacion),")<br><br>";