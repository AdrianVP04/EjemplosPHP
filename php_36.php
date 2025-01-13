<?php
$semana[1] = "lunes";
$semana[] = "martes";
$semana[] = "miércoles";
$semana[10] = "jueves";
$semana[] = "viernes";
$semana[5] = "sábado";
$semana[] = "domingo";

// Primer bucle: Usando un bucle for
echo "Usando un bucle for:<br>";
for($i = 0; $i < count($semana); $i++){
    echo $semana[$i] . "<br>";
}

// Segundo bucle: Usando un bucle foreach
echo "<br>Usando un bucle foreach:<br>";
foreach($semana as $dia){
    echo $dia . "<br>";
}
?>
