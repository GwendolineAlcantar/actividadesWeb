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
    $nombre = "Gwendoline Guadalupe Alcantar Urbieta";
    $letra = "";
    $i = 0;
    $j = 1;
    while ($i < strlen($nombre)) {
        $letra = substr($nombre, 0, $j);
        echo "$letra<br>";
        $i++;
        $j++;
    }


    ?>
</body>

</html>