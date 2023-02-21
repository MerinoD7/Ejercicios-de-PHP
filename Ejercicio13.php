<?php

$Intentos = 0;
$NumeroRandom = rand(1,20);

do {
    $numeroUsuario = readline("Ingrese su numero entre 1 a 20: ");
    $Intentos++;

    if ($numeroUsuario > $NumeroRandom ){
        echo "Pista: Su numero es Mayor ";
    }else if($numeroUsuario < $NumeroRandom){
        echo "Pista: Su numero es Menor ";
    }else
    echo "Felicidades has adivinado el numero secreto". "<br>" ."Su numero de intentos fue:" . $Intentos;

}while($numeroUsuario != $NumeroRandom);


?>