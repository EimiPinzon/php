<?php 

/*echo "hola mundoooooo ";*/

//// variables
/*

$variable=19;
$variable_2="Eimi Pinzon";
echo "mi nombre es: ". $variable_2 . " tengo ". $variable." años";*/

///// array
/*

$frutas = array('manzanas', 'uvas', 'peras', 'banano');

echo $frutas [1];

if ($frutas[0]=='manzanas'){
    echo "es correcto";

} else{
    echo "es incorrecto";
};

$frutas_2= array('clave1'=> 'uvas', 'clave_2'=> 'banano');

echo "esta es la fruta: ". $frutas_2['clave_2'];

$frutas = array('manzanas', 'uvas','clave_3'=> 'peras', 'banano');

echo $frutas['clave_3'];*/


///// constantes
/*
define('constante', 'mi nombre');
define('pi', '3.14');
echo constante;*/

////// ciclo if
/*
$edad=18;

if  ($edad==18){
    echo "somo mayores de edad";
}else{
    echo "somo menores de edad";
};*/

//// switch
/*

$opc= "5";

switch ($opc){
    case 'a':
        echo "valor es a";
        break;
    case 2:
        echo "valor es 2";
        break;
    case 3:
        echo "valor es 3";
        break;
    default:
        echo "no sabemos cuál es su valor";
        break;
}*/

//// ciclo for
/*
for ($i=0; $i > 11; $i++){
    echo "variable incrementa ". $i;
    echo "<br>";
}*/

///// ciclo while
/*
$e=0;
while ($e <=10){
    echo $e;
    echo "<br>";
    $e++;
}*/

//// operaciones con fechas
/*

echo "fecha del día de hoy". date("d-m-y");

echo "<br>";
echo "el día de hoy es: ". date('d');
echo "<br>";
echo "el mes actual es: ". date('M');
echo "<br>";
echo "el mes actual es: ". date('F');
echo "<br>";
echo "Número de la semana actual es: ". date('W');
echo "<br>";
echo "el número del día miercoles es: ". date('W');
echo "<br>";
echo "¿cuántos días tiene el mes:? ". date('t');*/


///// operadores lógicos (and, or, xor)
/*
$a=1;
$b=3;

if ($a == 1 and $b == 2) {
    echo "cumple la condición";
}else{
    echo "no cumple la condición";
}

echo "<br>";

if ($a == 1 or $b == 2) {
    echo "cumple la condición";
}else{
    echo "no cumple la condición";
}

echo "<br>";

if ($a == 1 xor $b == 2) {
    echo "cumple la condición";
}else{
    echo "no cumple la condición";
}*/

//// operadores aritmeticos
/*
$val1=5;
$val2=5;

echo $val1 + $val2;
echo "<br>";
echo $val1 * $val2;
echo "<br>";
echo $val1 - $val2;
echo "<br>";
echo $val1 / $val2;
echo "<br>";
echo $val1 % $val2; ///residuo
echo "<br>";
echo $val2 ** $val2; /// exponente*/

//// operadores de comparación
/*
== igual
=== identico
!= diferente <>
!== no identico
< menor que
> mayor que
<= menor igual que
>= mayor igual que */

/*$v=2;

if ($v <= 2) {
    echo "cumple la tarea";
}else {
    echo "no cumple la tarea";
}

echo "<br>";

if ($v === "2") {
    echo "cumple la tarea";
}else{
    echo "no cumple la tarea";
}

echo "<br>";*/

/// Cadenas
//// strlen nos dice cuantos caracteres tiene una variable y str_replace permite reemplazar caracteres de la variable
//// strolower pone los caracteres en minuscula y strtoupper pone loa caracteres en mayuscula

$cadena = "hola mundo";

echo strlen ($cadena);
echo '<br>';
echo str_replace('h','H',$cadena);
echo '<br>';
echo strtolower($cadena);
echo '<br>';
echo strtoupper ($cadena);

?>