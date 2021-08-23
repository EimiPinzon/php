<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$seleccionar = $conexion -> query("SELECT *  FROM alumnos WHERE id='$id'");

if ($fila = $seleccionar -> fetch_assoc()){
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>REGISTRO</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="formulario.php">CALCULADORA</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="registro.php">REGISTRO</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <main>
        <br><br><div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="update.php" method="POST">
                        <div class="mb-3">
                            <label for="id" class="form-label"></label>
                            <input type="hidden" class="form-control" name="id" id="nombres"
                            value="<?php echo $id?>">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres del alumno</label>
                            <input type="text" class="form-control" name="nombres" id="nombres"
                            value="<?php echo $fila['nombres']?>">
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos del alumno</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos"
                            value="<?php echo $fila['apellidos']?>">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad del alumno</label>
                            <input type="number" class="form-control" name="edad"  id="edad"
                            value="<?php echo $fila['edad']?>">
                        </div>
                        <button type="submit" value="actualizar" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
        

    </main>
    <footer>

    </footer>
</body>
</html>