<?php
//definir elementos
//inicializar las variables
//calcular la edad
//  obtener la diferencia entre años
//      si ya cumplio años entonces es la misma diferencia de años
//      si no ha cumplido años. entonces seria la diferencia de años menos 1

$diaNacimiento = 30;
$mesNacimiento = 01;
$anioNacimiento = 2020;

$diaComparacion = 28;
$mesComparacion = 05;
$anioComparacion = 2021;

//logica
if ($mesNacimiento <= $mesComparacion) {
    $anio = $anioComparacion - $anioNacimiento;
    if ($diaNacimiento <= $diaComparacion) {
        $edad = $anio;
        echo "su edad es $edad";
    } else {
        $edad = $anio - 1;
        echo "su edad es $edad";
    }
} else {
    $anio = $anioComparacion - $anioNacimiento;
    if ($diaNacimiento <= $diaComparacion) {
        $edad = $anio - 1;
        echo "su edad es $edad";
    } else {
        $edad = $anio - 1;
        echo "su edad es  $edad";
    }
}
