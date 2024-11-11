<!-- Agregar elementos a un array en cualquier orden. Al usar [] sin un índice específico, PHP asigna el siguiente índice mayor disponible automaticamente -->

<?php
$semana[1] = "lunes";
$semana[] = "martes";
$semana[] = "miércoles";
$semana[10] = "jueves";
$semana[] = "viernes";
$semana[5] = "sábado";
$semana[] = "domingo";

