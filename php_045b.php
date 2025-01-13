<!-- Se necesita almacenar las notas de IAW, ASGBD Y SAD de varios estudiantes de ASIR. Crea la estructura necesaria e imprime el resultado.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de alumnos de ASIR</title>
    <style>
        table{
            width: 60%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td { 
            border: 1px solid black; 
            padding: 8px; 
            text-align: center;
        }
        th { 
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Notas de alumnos de ASIR</h2>
 
    <?php
        $alumnos = [
            "Carlos" => ["IAW" => 5, "ASGBD" => 6, "SAD" => 3],
            "Pepe" => ["IAW" => 9, "ASGBD" => 2, "SAD" => 1],
            "Marta" => ["IAW" => 3, "ASGBD" => 6, "SAD" => 1],
            "Ana" => ["IAW" => 9, "ASGBD" => 9, "SAD" => 9],
            "Adrian" => ["IAW" => 3, "ASGBD" => 2, "SAD" => 1],
        ];
    ?>
    
    <table>
        <tr>
            <th>Alumno</th>
            <th>IAW</th>
            <th>ASGBD</th>
            <th>SAD</th>
            <th>Media</th>
        </tr>

        <?php
            foreach ($alumnos as $nombre => $notas) {
                // Calculamos la media
                $media = array_sum($notas) / count($notas);
        ?>
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $notas["IAW"]; ?></td>
            <td><?php echo $notas["ASGBD"]; ?></td>
            <td><?php echo $notas["SAD"]; ?></td>
            <td><?php echo number_format($media, 2); ?></td> <!-- Mostrar la media con 2 decimales -->
        </tr>
        <?php }; ?>
    </table>

</body>
</html>
