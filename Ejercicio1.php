<?php 
/*Dado un grupo de numero (diferentes a cero), realice un progrma
que permita determinar y dar como salida lo siguiente:

+ Cantidad de numero mayores a 100
+ Cantidad de numeros negativos encontrados
+ promedio de los positivos encontrados */;

$array = [100,-8,5,20,-15,63,6,9,-2,1,5,3,4,-7,9,102,-88,64];

$mayoresCien = 0;
$negativos = 0;
$sumaPositivos = 0;
$cantidadPositivos = 0;

foreach ($array as $numero) {
    if ($numero > 100) {
        $mayoresCien++;
    }
    if ($numero < 0) {
        $negativos++;
    }
    if ($numero > 0) {
        $sumaPositivos += $numero;
        $cantidadPositivos++;
    }
}

$promedioPositivos = ($cantidadPositivos > 0) ? $sumaPositivos / $cantidadPositivos : 0;

echo "Cantidad de números mayores a 100: $mayoresCien\n";
echo "Cantidad de números negativos: $negativos\n";
echo "Promedio de los números positivos: $promedioPositivos\n";
?>