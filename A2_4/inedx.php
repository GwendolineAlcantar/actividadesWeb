<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
        $metodoUtilizado = $_SERVER['REQUEST_METHOD'];

        /*if($metodoUtilizado == "GET"){
            echo "No es posible acceder mediante $metodoUtilizado <br>";
            exit();
        }*/

        $numPeticiones = 0;
        
        if(isset($_GET["nombre"])){
            $nombre = $_GET["nombre"];
            $numPeticiones = $_GET["numPeticiones"];
            $numPeticiones++;
            include('show.php');
            include_once('form.php');
        }else{
            include_once('form.php');
        }
    ?>
</body>
</html>