<?php
// Array asociativo
$array = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris",
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon",
    "Spain" => "Madrid", 
    "Sweden" => "Stockholm", 
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia", 
    "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin", 
    "Hungary" => "Budapest", 
    "Latvia" => "Riga", 
    "Malta" => "Valetta",
    "Austria" => "Vienna", 
    "Poland" => "Warsaw"
);

// Función para convertir las claves y los valores a mayúsculas
function convertirMayusculas($array) {
    $array_mayusculas = [];
    
    foreach ($array as $clave => $valor) {
        $array_mayusculas[strtoupper($clave)] = strtoupper($valor);
    }
    
    return $array_mayusculas;
}

// Convertir a mayúsculas
$array_mayusculas = convertirMayusculas($array);

// Ordenar el array por clave
ksort($array_mayusculas);

// Mostrar el array ordenado
echo "Array asociativo ordenado y en mayúsculas:\n";
print_r($array_mayusculas);
?>
