<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial de PHP</title>
</head>
<body>

    <?php

    //Comentarios

    //echo "<h1>Hola mundo</h1>";

    #echo "<h1>Hola mundo</h1>";

     /*echo "<h1>Hola mundo</h1>";
    echo "<h1>Hola mundo</h1>";*/
/*
    //Variables
    $nombre = "Henry";

    echo "Mi nombre es: " . $nombre;
*/
    //Tipos de variables:
    
    #Integer: Numeros enteros.
    #float: Numeros decimales.
    #String: cadenas de texto.
    #boolean: verdadero o falso.
    #array: coleccion de datos.
    #Object: definido por determinada clase.

    //Variables constantes
/*
    define("PI",3.14159);

    echo "El valor de PI es: " . PI;


    echo "6 + 4 = " . (6 + 4) . "<br/>";
    echo "6 - 4 = " . (6 - 4) . "<br/>";
    echo "6 * 4 = " . (6 * 4) . "<br/>";
    echo "6 / 4 = " . (6 / 4) . "<br/>";
    echo "6 % 4 = " . (6 % 4) . "<br/>";

    //Referencias a determinados valores.

    $miNumero = 6;
    $refNumero = &$miNumero;

    $miNumero = 20;

    echo $refNumero;

    //Condicionales.
/*
     == === < > <= >= != !==

    $miEdad = 20;

     if($miEdad > 30) {
        echo "Mi edad es mayor a 10!";
    }else if($miEdad === 20){
        echo "Tu edad es 20";
    }else{
        echo "No puedo adivinar tu edad";
    }
    if (($miEdad === 20) && ($miEdad < 25)) {
        echo "Tu edad es de 20 años.";
    }
    
    if (($miEdad === 20) || ($miEdad > 25)) {
        echo "Tu edad es de 20 años.";
    }
*/
/*
$miNumero = 20;

$resultado = ($miNumero > 40) ? "Tu numero es menor a 40" : "Tu numero es mayor a 40";
echo $resultado;
*/
/*
$usuario = "Beto";

switch ($usuario) {
    case 'Luis':
        echo "Hola Luis";
        break;
        case 'Henry':
            echo "Hola Henry";
            break;
            case 'Carmen':
                echo "Hola Carmen";
                break;
    default: 
    echo "No puedo adivinar tu nombre";
            break;
}


$miNumero = 0;

while ($miNumero < 10) {
    echo $miNumero . "<br/>"; // 0 1 2 3 4 5 6 7 8 9
    $miNumero++;
}
*/
/*
for ($num=1; $num <= 10; $num++) { 
    echo $num;
    if ($num !== 10) {
        echo ", ";
    }else {
        break;
    }
}
*/
   //Arreglos
/*
$personas = array("Henry", "Luis", "Carmen", "Beto");

foreach ($personas as $persona) {
    echo $persona . "<br/>";
}


$personas = array("Luis" => 20, "Beto" => "30", "Carmen" => 25);

foreach($personas as $key => $val){
   // echo $key . " Tiene " . $val;
   echo "$key tiene $val";
}
*/
/*
$cadena = "              Los colores            ";
echo strlen($cadena) . "<br/>";
echo strlen(ltrim($cadena)) . "<br/>";
echo strlen(rtrim($cadena)) . "<br/>";
echo strlen(trim($cadena)) . "<br/>";

$usuario = "Henry";

printf("Mi nombre es: %s", $usuario);
*/
/*
$mensaje = "Los cuadernos";

echo strtoupper($mensaje) . "<br/>";
echo strtolower($mensaje) . "<br/>";

print_r(explode(' ', $mensaje));
*/

//Funciones

function myFunction($a, $b){
    return $a + $b;
}

echo "la suma de 6 + 4 = ". myFunction(6,4);
    ?>
</body>
</html>