<!--Hacer un programa que muestre las tabla de multiplicar. Debe haber un encabezado h3 como titulo de cada tabla( html dentro de php: echo "<h3>")-->
<!-- Si quiero insterta HMTL dentro de PHP uso echo o print -->
<!-- BUCLES ANIDADOS: FOR dentro de otro FOR-->
<?php
for ($i = 1; $i <= 10; $i++){
    echo "<h2>Tabla del $i </h2><br>";
    for ($j = 1; $j <= 10; $j++){
        $res = $i * $j;
        echo "$i x $j = $res <br>";
    }
}