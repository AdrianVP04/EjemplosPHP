<?php
    // Calcular el número total de granos en el tablero de ajedrez
    $total_granos = pow(2, 64) - 1; // 2^64 - 1
    
    // Mostrar el resultado
    echo "El número total de granos de trigo en el tablero de ajedrez es: ";
    echo number_format($total_granos, 0, '.', ','); // Formateamos el número con comas
?>
