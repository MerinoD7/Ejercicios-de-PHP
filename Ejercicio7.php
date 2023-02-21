<?php
/* En una empresa de 20 trabajadores, se hará un aumento al salario de acuerdo con 
el tiempo de servicio, para este aumento se tomará en cuenta lo siguiente:
Tiempo de servicio Aumento
1 a menos de 5 años $25
De 5 y menos de 10 años $50
De 10 y menos de 20 años $100
De 20 años a más $150
Al final deberá imprimir el nombre, salario actual, el aumento y el nuevo sueldo de 
cada trabajador. */

$planilla = array(
    array('nombre' => 'Ana', 'salario' => 1000, 'tiempo_servicio' => 5),
    array('nombre' => 'Kevin', 'salario' => 1500, 'tiempo_servicio' => 4),
    array('nombre' => 'Pedro', 'salario' => 2000, 'tiempo_servicio' => 15),
    array('nombre' => 'Juan', 'salario' => 1000, 'tiempo_servicio' => 13),
    array('nombre' => 'Meylin', 'salario' => 1500, 'tiempo_servicio' => 7),
    array('nombre' => 'Carlos', 'salario' => 2000, 'tiempo_servicio' => 20),
    array('nombre' => 'Angel', 'salario' => 1000, 'tiempo_servicio' => 8),
    array('nombre' => 'Azucena', 'salario' => 1500, 'tiempo_servicio' => 12),
    array('nombre' => 'Miguel', 'salario' => 2000, 'tiempo_servicio' => 11),
);


foreach ($planilla as $trabajadores) {
   
    $aumento = 0;

    if ($trabajadores ['tiempo_servicio'] >= 1 && $trabajadores ['tiempo_servicio'] < 5) {
        $aumento = 25;
    } elseif ($trabajadores ['tiempo_servicio'] >= 5 && $trabajadores ['tiempo_servicio'] < 10) {
        $aumento = 50;
    } elseif ($trabajadores ['tiempo_servicio'] >= 10 && $trabajadores ['tiempo_servicio'] < 20) {
        $aumento = 100;
    } elseif ($trabajadores ['tiempo_servicio'] >= 20) {
        $aumento = 150;
    }
}
    $nuevoSalario = $trabajadores ['salario'] + $aumento;

    echo "Nombre: " . $trabajadores['nombre'] . "<br>";
    echo "Salario actual: " . $trabajadores['salario'] . "<br>";
    echo "Aumento: " . $aumento . "<br>";
    echo "Nuevo salario: " . $nuevoSalario . "<br><br>";
 
?>