<?php
$semana[1] = "lunes";
$semana[] = "martes";
$semana[] = "miércoles";
$semana[10] = "jueves";
$semana[] = "viernes";
$semana[5] = "sábado";
$semana[] = "domingo";

for($i = 0; $i < count($semana); $i++){
    echo $semana[$i]. "<br>";
}

foreach($semana as $dia){
    echo $dia."<br>;
}