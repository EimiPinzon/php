<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculadora</title>
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
                <a class="nav-link active" aria-current="page" href="#">INICIO</a>
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
                <form action="calculadora.php" method="post">
                    <input type="text" name="valor1" placeholder="valor1"> <br>
                    <input type="text" name="valor2" placeholder="valor2"> <br>
                    <input type="text" name="valor3" placeholder="valor3"> <br>
                    <input type="text" name="valor4" placeholder="valor4"> <br>
                    <input type="radio" name="operador" value="0"> Suma <br>
                    <input type="radio" name="operador" value="1"> Resta <br>
                    <input type="radio" name="operador" value="2"> Multiplicación <br>
                    <input type="radio" name="operador" value="3"> Division <br>
                    <input type="submit" value="calcular">
                </form>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>