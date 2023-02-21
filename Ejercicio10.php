<?php

/* Calcular el salario liquido de 10 empleados tomando en cuenta que existen 3 roles 
con las siguientes prestaciones salariales:
Programador Jr     $600
Programador Middle $900
Programador Sr	   $1800

Debera de mostrar el salario mensual descontando (La Renta , Seguro  y AFP)
Debera de mostrar el salario anual descontando (La Renta , Seguro  y AFP)
Debera de mostrar la suma de todos los salarios de los 10 empleados 
renta 10 % , seguro 3% , afp 7% */


$planilla = array(
    array('nombre' => 'Ana', 'salario' => 600, 'Rol' => 1),
    array('nombre' => 'Kevin', 'salario' => 900, 'Rol' => 2),
    array('nombre' => 'Pedro', 'salario' => 1800, 'Rol' => 3),
    array('nombre' => 'Juan', 'salario' => 600, 'Rol' => 1),
    array('nombre' => 'Meylin', 'salario' => 900, 'Rol' => 2),
    array('nombre' => 'Carlos', 'salario' => 1800, 'Rol' => 3),
    array('nombre' => 'Angel', 'salario' => 600, 'Rol' => 1),
    array('nombre' => 'Azucena', 'salario' => 900, 'Rol' => 2),
    array('nombre' => 'Miguel', 'salario' => 1800, 'Rol' => 3),
);


foreach ($planilla as $trabajadores) {
 
    $renta = $trabajadores ['salario'] * 0.10;
    $seguro = $trabajadores ['salario'] * 0.03;
    $afp = $trabajadores ['salario'] * 0.07;
    $salarioneto = 0;

    if ($trabajadores ['rol'] >= 1) {
        $salarioneto = $trabajadores ['salario'] - $renta - $seguro - $afp;

    } elseif ($trabajadores ['rol'] >= 2 ) {
        $salarioneto = $trabajadores ['salario'] - $renta - $seguro - $afp;

    } elseif ($trabajadores ['rol'] >= 3 ) {
        $salarioneto = $trabajadores ['salario'] - $renta - $seguro - $afp;

    } 

    $nuevoSalario = $trabajadores ['salario'] + $aumento;

    echo "Nombre: " . $trabajadores['nombre'] . "<br>";
    echo "Salario actual: " . $trabajadores['salario'] . "<br>";
    echo "Aumento: " . $aumento . "<br>";
    echo "Nuevo salario: " . $nuevoSalario . "<br><br>";
}





?>