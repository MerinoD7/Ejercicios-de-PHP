<?php

$Totalpago = readline("Total a Pagar: $");
$Servicio = readline ("Califiquenos 1. Excelente <br>, 2. Regular <br>, 3. Malo: <br>");
$Propina = 0;


if ($Servicio == 1){
    $Propina = $Totalpago * 0.10;

}else if ($Servicio == 2) {
    $Propina = $Totalpago * 0.5;
}else if ($Servicio == 3){
    $Propina = $Totalpago * 0.2 . $Describa = readline ("Describa porque le parecio Malo:");
}

$Total = $Propina + $Totalpago;

    echo "Cuenta: " . $Totalpago . "<br>";
    echo "Propina " . $Propina . " " ."<br>";
    echo "Total: " . $Total . "<br>";
 

?>