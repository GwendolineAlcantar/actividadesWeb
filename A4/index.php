<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //definir elementos
    //inicializar las variables
    //calcular la edad
    //  obtener la diferencia entre años
    //      si ya cumplio años entonces es la misma diferencia de años
    //      si no ha cumplido años. entonces seria la diferencia de años menos 1

    $diaNacimiento = 26;
    $mesNacimiento = 01;
    $anioNacimiento = 1999;

    $diaComparacion = 26;
    $mesComparacion = 05;
    $anioComparacion = 2021;

    $edad = $anioComparacion - $anioComparacion;
    $yaCumplioAnios = false;

    /*al comparar el mes
el mes ya paso, ya cumplio años*/
    if ($mesNacimiento < $mesComparacion) {
        $yaCumplioAnios = true;
    }
    /*
el mismo mes de nacimiento,¿como saber si ya cumplio años? comparando el dia
*/
    if ($mesNacimiento == $mesComparacion) {
        /*
    el dia de nacimiento es igual o menor que la comparacion
    */
        if ($diaNacimiento <= $diaNacimiento) {
            $yaCumplioAnios = true;
        }
    }

    //el mes aun no ha legado(menor al de la comparacion)
    if ($yaCumplioAnios == false) {
        $edad--;
    }
    //impresion del mensaje
    echo "tiene $edad años";


    ?>
</body>

</html>