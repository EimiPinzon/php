<?php include 'conexion.php' ?>
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
                    <form action="guardar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres del alumno</label>
                            <input type="text" class="form-control" name="nombres" id="nombres" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos del alumno</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad del alumno</label>
                            <input type="number" class="form-control" name="edad" id="edad" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" value="guardar" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6">
                <br><table class="table table-success table-striped">
                        <th>id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <?php 
                            $seleccionar = $conexion -> query("SELECT * FROM alumnos");

                            while ($fila = $seleccionar -> fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $fila['id'] ?></td>
                            <td><?php echo $fila['nombres'] ?></td>
                            <td><?php echo $fila['apellidos'] ?></td>
                            <td><?php echo $fila['edad'] ?></td>
                            <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">Actualizar</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        

    </main>
    <footer>

    </footer>
</body>
</html>