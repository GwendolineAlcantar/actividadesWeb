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

//declaracion de funciones
function imprimir(){
    echo "Imprimiendo desde funcion<br>";
}

imprimir();

//declaracion de funciones, pasando parametros
function titulo($descripcion, $saludo){
    echo "$descripcion<br>";
}

titulo("mensaje desde parametro","buenas noches");
$titulo="mensaje desde variable";
$saludo="buen dia";
titulo($titulo);

//declaracion de una funcion con parametros opcionales
function tituloOpcional($descripcion="Sin titulo"){
    echo "$descripcion<br>";
}

$titulo="mi titulo";
tituloOpcional($titulo);
//parametro por valor : copia de variable, solo va a existir mientrqas este en el cuerpo de la variable
//referencia : unidad de memoria donde se encuentra almacenada
// 00000000001=$resultado=0
//$resultado=0;
//valor
function sumar($resultado){
    $resultado++;
    echo "valor dentro de la funcion $resultado<br>";
}
//referencia
function sumar(&$resultado){
    $resultado++;
    echo "valor dentro de la funcion $resultado<br>";
}
$resultado=0;
sumar($resultado);
echo "valor fuera de la funcion $resultado<br>";

//imprimir y retornar valores
function imprimirYguardar($titulo){
    echo "$titulo<br>";
    return "el mensaje es $titulo<br>";
}

$texto=imprimirYguardar("hola");
echo $texto;

//dedclaracion de arreglos
$arreglo=array(1,2,"hola",3.1416);
echo var_dump($arreglo);

$arreglo=[1,2,"hola",3.1416];
echo var_dump($arreglo);

//declaracion de arreglos
$arreglo[0]=true;
echo var_dump($arreglo);
echo $arreglo[2] . "<br>";

//iteraciones
//for
$arreglo=array(1,2,"hola",3.1416);
for($i=0;$i<count($arreglo);$i++){
    echo "$i<br>";
}

//while 
$arreglo=array(1,2,"hola",3.1416);
$ciclos=count($arreglo)-1;
while($ciclos>=0){
    echo "$arreglo[$ciclos]<br>";
    $ciclos--;
}

//do while
$arreglo=array(1,2,"hola",3.1416);
$ciclos=count($arreglo)-1;
do{
    echo "$arreglo[$ciclos]<br>";
    $ciclos--;
}while($ciclos>=0);


//foreach
/*$arreglo=array(1,2,"hola",3.1416);
foreach($arreglo as $item){
    echo "$item <br>";
}*/

$arreglo=array(1,2,[1.1,1.2,1.3],3.1416);
foreach($arreglo as $item){
    if(is_array($item)){
        foreach($item as $subItem){
            echo "item secundario $subItem <br>";
        }
    }else{
        echo "item primario $item <br>";
    }
}

//arreglos asociativos
$arreglo=["id"=>1,"nombre"=>"Gwendo","edad"=>20];
//echo var_dump($arreglo);
//echo $arreglo['id'].", Soy ".$arreglo['nombre'].", y tengo ".$arreglo['edad'];


$arreglo = ["nombre"=>""];
$arreglo["nombre"] = "Alicia"; //Asignación
echo $arreglo["nombre"]."<br>"; // Obtener el valor

foreach($arreglo as $key => $valor){
    echo "el campo $key tiene un valor $valor<br>";
}


// uso de clases
class Persona{
    public $nombre;
    STATIC $edad=18;
    CONST EDAD=18;
    function __constructor(){
        $this->nombre = "no asignado";
    }
    public function setnombre($pNombre){
        $this->nombre = $pNombre;
    }
    public function getnombre($pNombre){
        return $this->nombre;
    }
    //Funcion estaticas
    public static function edadMin($pEdad){
        return 18 + $pEdad;
    }
}

$persona = new Persona();
    echo var_dump($persona);
    $persona->setnombre("Gwendoline");
    $persona->getnombre("Gwendoline");
    $persona->nombre = "Gwendoline"; //Asignación
    echo $persona->nombre."<br>"; // obtener el valor
    echo var_dump(["nombre"=>"Gwendoline"]);
    echo var_dump(["nombre","Gwendoline"]);

    $edadMinima = Persona::edadMin(2);
    $edadMinima = Persona::$edad;
    $edadMinima = Persona::EDAD;
    echo "$edadMinima <br>";

    //Funciones de uso comun en arreglos
    //Convertir una cadena en un arreglo
    $cadena = "hola buen día";
    $arreglo = explode("a", $cadena);
    echo var_dump($arreglo);

    //Convertir una arreglo en un cadena
    $cadena2 = implode(",", $arreglo);
    echo var_dump($cadena2);

    // Recortar una cadena
    $cadena = "hola buen día";
    $recortada = substr($cadena, 10,3);
    echo var_dump($recortada);

    // Remplazar una cadena
    $cadena = "hola buen día";
    $remplazada = str_replace("buen día","buenas noches",$cadena);
    echo var_dump($recortada);

    // Conocer la longitud una cadena
    $longitud = strlen("hola buen día");
    echo "La cadena tiene una longitud de $longitud<br>";




?>
</body>
</html>