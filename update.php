<?php
include 'conexion.php';

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

$update = $conexion -> query("UPDATE alumnos SET nombres='$nombres', apellidos='$apellidos', edad='$edad' WHERE id='$id'");

if ($update){
    echo "<script>
        location.href='registro.php';
    </script>";
}else{
    echo "<script>
        location.href='actualizar.php?id=".$id."';
    </script>";
};

?>