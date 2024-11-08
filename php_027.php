<!-- Poner bordes a las tablas anteriores -->
<?php
for ($i = 1; $i <= 10; $i++){
    echo "<table style='border: 2px solid green; border-collapse:collapse; margin: 3px auto;'> <tr> <th colspan='5'> tabla del $i</th></tr>";  
    for ($j = 1; $j <= 10; $j++){
        $res = $i * $j;
            echo "<tr> 
                <td style='border: 1px solid green; padding: 5px;'>$i</td> 
                <td style='border: 1px solid green; padding: 5px;'>x</td> 
                <td style='border: 1px solid green; padding: 5px;'>$j</td> 
                <td style='border: 1px solid green; padding: 5px;'>=</td> 
                <td style='border: 1px solid green; padding: 5px;'>$res</td> 
            </tr>";
    }
    echo "</table><br>";
}
