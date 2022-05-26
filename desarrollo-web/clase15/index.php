

<!--print "<h1>estoy practicando php</h1>";
echo "<br>";
echo "Por ahora es sencillo", "Segundo", "Tercero";

echo "<br>";


#variables numerica php
$numero = 5;
echo "esto es una variable numero: <b>$numero</b>";

echo "<br>";

#variables texto php
$palabra = "palabra";
echo "esto es una variable de texto:<b>$palabra</b>";

echo "<br>";

#variables Boleana php
$boleana = true;
echo "esto es una variable boleana:<b> $boleana</b>";

echo "<br>";

#variables Arreglo php
$colores = array("rojo","amarillo");
echo "esto es una variable arreglo:<b> $colores[0]</b>";

echo "<br>";

#variables Arreglo con propiedades php
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "esto es una variable arreglo con propiedades:<b> $verduras[verdura1]</b>";

echo "<br>";

#variables objeto php
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable objeto:<b> $frutas->fruta1</b>";

echo "<br>";

#variables var_dum php
$numero = 5;
echo "esto es un numero: $numero";
var_dump($numero);

echo "<br>";

#variables var_dum php
$palabra = "brian";
echo "el es: $palabra";
var_dump($palabra);


echo "<br>";

#variables var_dum php
$boleana = true;
echo "el es: $boleana";
var_dump($boleana);

#variables Arreglo php
$colores = array("rojo","amarillo");
echo "esto es una variable arreglo:<b> $colores[0]</b>";
var_dump($colores);

echo "<br>";

#variables Arreglo con propiedades php
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "esto es una variable arreglo con propiedades:<b> $verduras[verdura1]</b>";
var_dump($verduras);

echo "<br>";

#variables objeto php
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable objeto:<b> $frutas->fruta1</b>";
var_dump($frutas);

echo "<br>";


#funciones php:
#funciones sin parametros

function saludo(){

    echo "hola";
}

saludo();

echo "<br>";


#funcion con parametro 
function despedida($adios){
    echo $adios."<br>";

}

despedida("chau");


#funciones con retorno 
function retorno($retornar){
    return $retornar; 
}

echo retorno("como estas!");
echo "<br>";





#condiciones php 
$a = 5;
$b = 10;
if($a > $b){ #if significa "si"
echo "a es mayor que b<br> ";
}

$a = 5;
$b = 10;
if($a < $b) {
echo "a es mayor que b<br> ";
}

echo "<br>";

$c = 10;
$d = 10;
if($c > $d) {
echo "c es mayor que d";
}

else if($c == $d) { #else if significa "y tambien"
echo "c es igaul que d";
}

echo "<br>";


$a = 5;
$b = 10;
if($a > $b) {
echo "a es mayor que b";
}

else if($a == $b) { #else if significa "y tambien"
echo "a es igaul que b";
}

else { #else significa "sino"
    echo "a es menor que b";
}

echo "<br>";


#variables suiches 
$dia = "jueves";

switch($dia){

    case 'sabado':
    echo "voy a estudiar php";
    break;

    case 'viernes':
        echo "voy a la fiesta";
        break;

        case 'domingo':
            echo "voy a descansar";
            break;

            default: echo "voy a la universidad";
}


echo "<br>";

#variables ciclo while
$n = 1;
while($n < 5) {
    $n++;
    echo "$n";
}


 
echo "<br>";



$n = 1;
while($n < 5) {
    echo "$n";
    $n++;
    
}



echo "<br>";



$n = 1;
while($n <= 5) {
    echo "$n";
    $n++;
    
}

echo "<br>";
 

#ciclo do while 
$p =1;
do{ #do significa "hacer"
    echo $p;
    $p++;
}

while($p <= 5); #whlie significa mientras que / hasta q



echo "<br>";


#ciclo for 
for($i = 0; $i <=5 ; $i++){
    echo $i;
}


echo "<br>";

$boleana = true;
$false = "falso";
$diez = 10;
$cinco = 5;
if ($cinco > $diez) {
    echo "si es verdad que 5 es mayor a 10 es: $boleana";
} 
 if ($cinco == $diez) {
    echo "cinco es igual a diez: $boleana";
} 

if ($cinco < $diez) {
    echo "cinco es mayor a diez: $boleana";
} 
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--<form id="form1" action="correo.php" method="POST" >
        <input type="text" name="nombre" value="" placeholder="Nombre" required><br>
        <input type="email" name="email" value="" placeholder="Email" required><br>
        <input type="submit" value="enviar">
    </form>
<?php
include("correo.php");
?>-->



<form id="form1" action="correo.php" method="POST" >
        <input type="text" name="nombre" value="" placeholder="Nombre" required><br>
        <input type="email" name="email" value="" placeholder="Email" required><br>
        <input type="submit" value="enviar">
    </form>


    
</body>
</html>


