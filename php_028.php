<!-- Haz una tabla con las cinco primeras potencias de los diez primeros numeros -->

<?php
echo "<table border='1'>";

// Crear encabezado de la tabla
echo "<tr><th>Numero</th><th>Potencia 1</th><th>Potencia 2</th><th>Potencia 3</th><th>Potencia 4</th><th>Potencia 5</th></tr>";

// Generar las filas de la tabla
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";  // Imprimir el número
    for ($j = 1; $j <= 5; $j++) {
        // Imprimir la potencia de $i elevado a la $j
        echo "<td>" . pow($i, $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
