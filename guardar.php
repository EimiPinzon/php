<?php

include 'conexion.php';
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

$insertar = $conexion -> query("INSERT INTO alumnos (id,nombres,apellidos,edad) values ('','$nombres','$apellidos','$edad') ");

if ($insertar){
    echo "El alumno se ha guardado correctamente";
}else{
    echo "El alumno no fue guardado";
}

?>