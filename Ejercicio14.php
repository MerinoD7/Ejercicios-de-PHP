<?php

$estudiantes = array(
    array('nombre' => 'juan', 'grado' => '9', 'nota' => '8'),
    array('nombre' => 'ana', 'grado' => '7', 'nota' => '6'),
    array('nombre' => 'martin', 'grado' => '8', 'nota' => '7'),
    array('nombre' => 'melisa', 'grado' => '8', 'nota' => '9')

);

$aprobaron = 0;
$reprobados = 0;
$suma = 0;
$promedio = 0;


foreach ($estudiantes as $estudiante){
    $suma += $estudiante['nota'];

        if ($estudiante['nota'] >= 7.5){
            $aprobaron ++;
        }else {
            $reprobados++;
        }
}

$promedio = $suma / count ($estudiante);

echo "Total de alumnos aprobados es: " . $aprobaron . "<br>";
echo "Total de alumnos reprobados es: " . $reprobados;

?>