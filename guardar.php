<?php

include 'conexion.php';
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

$insertar = $conexion -> query("INSERT INTO alumnos (id,nombres,apellidos,edad) values ('','$nombres','$apellidos','$edad') ");

if ($insertar){
    echo "<script>
    alert('El alumno se ha guardado correctamente');
    location.href='registro.php';
    </script>";
}else{
    echo "<script>
    alert('El alumno no fue guardado');
    location.href='registro.php';
    </script>";
}

?>