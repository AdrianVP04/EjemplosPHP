<!-- date(): fecha actual. Si pasamos dos parámetros el primero es el formato de la fecha que es el segundo parametro-->
<!-- time() fecha actual en segundos (1 enero 1970) -->
<!-- mktime(8, 0, 0, 9, 10, 1994): genera una marca de tiempo basada en una fecha y hora específica. -->
<!-- date('l jS \of F o\f\ Y): l día de la semana, jS día semana cardinal, \of y \o\f caracteres escapados F mes Y año -->
 <!-- getlastmod(): obtiene la fecha de la última modificación del archivo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora</title>
</head>
<body>
    <h1>Demostración de fechas y horas en PHP</h1>
    <?php
    //Fechas actuales y futuras
    echo "<h2>1.Fechas actuales y próximas</h2>";

    $today = date('Y-m-d');
    echo "Fecha de hoy: $today<br>";
    
    //en una semana
    $next_week = time() + (7 * 24 * 60 * 60);
    echo "Próxima semana: " . date('d-m-Y', $next_week)."<br>";

    //Fecha de nacimiento con formatos personalizados
    echo "<h2> 2. Fecha de nacimiento</h2>";
    $fecha_nacimiento = mktime(8, 0, 0, 9, 10, 1994);
    echo "Fecha de nacimiento: ". date('l jS \of F \o\f\ Y' , $fecha_nacimiento)."<br>";

    //fecha de última modificación del archivo
    echo "<h2>3. Fecha última de moficación del archivo.</h2>";
    echo "Última modificación: " .date('j - m - Y', getlastmod()). "<br>";
    ?>
</body>
</html>