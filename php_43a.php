<?php
// Declaramos un array que almacene las edades de tres personas
$edad = ["Pedro" => 35, "Juan" => 37, "Ana" => 25];

foreach($edad as $nombre => $años){
    echo "Nombre: " . $nombre . " Edad: " . $años . "<br>";
}

// Imprimir todo el array
echo "<h3>Array completo</h3>";
echo "<pre>";
print_r($edad);
echo "</pre>";
?>
