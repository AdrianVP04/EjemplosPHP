<?php
//ejer1: ver si existe un fichero llamado documento.txt y si no lo crea. Abrir el fichero. Escribir


if(file_exists('documento.txt')){
    echo "El fichero existe <br>";
}else{
    echo "El fichero no existe";
    $fichero = fopen('documento.txt','w');
    fwrite($fichero, "Hola mundo.");
    echo "Fichero creado.<br>";
}


//ejer2: Leer el contenido de un fichero y mostrarlo
    //echo file_get_contents('documento.txt')."<br>";

//ejer3: Sobreescribir "Hola Mundo" con "Hola Clase"
    file_put_contents('documento.txt', "Hola Clase");
    echo file_get_contents('documento.txt')."<br>";

//ejer4: añadir "Buenos dias" al final del fichero con FILE_APPEND
    file_put_contents("documento.txt", "Buenos días\n",FILE_APPEND);
    echo file_get_contents('documento.txt')."<br>";

//ejer5: añadir los números del 1 al 10 en filas distintas
  /*  file_put_contents('numeros.txt', ''); //si no existe lo crea
    for ($i = 1; $i <= 10; $i++){
        file_put_contents('numeros.txt', "Fila: $i" .PHP_EOL, FILE_APPEND);
    }
    echo "<pre>";
    echo file_get_contents('numeros.txt');
    echo "</pre>"; */

//ejer6: file() --> Convertir un archivo en array. Cada línea del archivo será una fila del array
    $numeros = file('numeros.txt');
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";
