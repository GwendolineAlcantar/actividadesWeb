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

    $dias = [
        ["dia" => 4, "mes" => 6],
        ["dia" => 19, "mes" => 7],
        ["dia" => 14, "mes" => 9]
    ];

    $meses = [
        ["Enero", 1, 31],
        ["Febrero", 1, 28],
        ["Marzo", 1, 31],
        ["Abril", 1, 30],
        ["Mayo", 1, 31],
        ["Junio", 1, 30],
        ["Julio", 1, 31],
        ["Agosto", 1, 31],
        ["Septiembre", 1, 30],
        ["Octubre", 1, 31],
        ["Noviembre", 1, 30],
        ["Diciembre", 1, 31]
    ];

    echo '<table style="float: left; display: inline-block;">';
    $m = 1;
    foreach ($meses as $mes) {
        $d = 1;
        echo "<tr>";
        echo "<td> $mes[0] </td>";
        for ($i = 1; $i <= $mes[2]; $i++) {
            foreach ($dias as $dia) {
                $m1 = $dia["mes"];
                if ($m == $dia["mes"]&&$dia["dia"] == $d) {
                        $style = 'background: red;';
                        $r=$i-1;
                        echo '<td style="' . $style . '" >' . $i . '</td>';
                        $i++;
                    }
            }
            $d++;
            echo "<td> $i </td>";
        }
        $m++;
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>