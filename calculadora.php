<?php

$val1 = $_POST['valor1'];
$val2 = $_POST['valor2'];
$val3 = $_POST['valor3'];
$val4 = $_POST['valor4'];
$operador = $_POST['operador'];

function calcular($v1, $v2){
    $ope = $_POST['operador'];
    switch ($ope){
        case 0:
            $resultado = $v1 + $v2;
            break;
        case 1:
            $resultado = $v1 - $v2;
            break;
        case 2:
            $resultado = $v1 * $v2;
            break;
        case 3:
            $resultado = $v1 / $v2;
            break;
    }
return $resultado;
}

$operacion = array('suma', 'resta', 'multiplicación', 'división');

echo "El resultado de la primera ".$operacion[$operador]." es ". calcular($val1, $val2);

echo "<br>";

echo "El resultado de la segunda ".$operacion[$operador]." es ". calcular($val2, $val3);

?>