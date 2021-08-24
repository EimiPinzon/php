<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$eliminar = $conexion -> query("DELETE  FROM alumnos WHERE id='$id'");

if ($eliminar){
    echo "<script>
    alert('El registro fue eliminado');
    location.href='registro.php';
    </script>";
}else{
    echo "<script>
    alert('El registro no pudo ser eliminado');
    location.href='registro.php'
    </script>";
};
?>
