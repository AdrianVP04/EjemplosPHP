<!-- escribe los 100 primeros numeros primos  -->
<!-- Si un numero es divisible por un numero mayor que su mitad, obligatoriamente tambien lo es por otro numero menor que su mitad. Por lo tanto si un numero es primo. basta con comprobar hasta la mitad de sus divisores --><?php
    // Función para comprobar si un número es primo
    function esPrimo($numero) {
        // Los números menores o iguales a 1 no son primos
        if ($numero <= 1) {
            return false;
        }

        // Comprobar si el número es divisible por algún número entre 2 y la mitad de él
        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                return false; // No es primo si es divisible por otro número
            }
        }
        return true; // Es primo
    }

    // Variable para contar cuántos números primos hemos encontrado
    $contador = 0;
    $numero = 2; // Comenzamos con el número 2, el primer número primo

    echo "Los primeros 100 números primos son:<br>";

    // Continuamos hasta encontrar los 100 primeros números primos
    while ($contador < 100) {
        if (esPrimo($numero)) {
            echo $numero . "<br>"; // Imprimir el número primo
            $contador++; // Aumentar el contador de números primos encontrados
        }
        $numero++; // Incrementamos para comprobar el siguiente número
    }
?>
