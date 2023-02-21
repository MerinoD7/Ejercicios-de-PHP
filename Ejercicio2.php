<?php 
/*Calcular el total a pagar por cada uno de los primeros 10 clientes que llegan a una
llanteria, si el precio de cada llanta es de $50 si se compran menos de 4
llantas y de $60 si se compran 4 o mas
*/

$clientes = 10;
$precioMenosDe4 = 50;
$precio4OMas = 60;

for ($i = 1; $i <= $clientes; $i++) {
    $numLlantas = rand(1, 10); /* Genera un número aleatorio de llantas compradas */

    $precioLlanta = ($numLlantas < 4) ? $precioMenosDe4 : $precio4OMas;
    $totalPagar = $numLlantas * $precioLlanta;

    echo "Cliente" . $i .": Compró $numLlantas llantas a" . $$precioLlanta . "cada una." . "Total a pagar:". $$totalPagar ."\n";
}

?>