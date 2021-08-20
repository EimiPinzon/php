<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <form action="calculadora.php" method="post">
            <input type="text" name="valor1" placeholder="valor1"> <br>
            <input type="text" name="valor2" placeholder="valor2"> <br>
            <input type="radio" name="operador" value="0"> suma <br>
            <input type="radio" name="operador" value="1"> resta <br>
            <input type="radio" name="operador" value="2"> multiplicacion <br>
            <input type="radio" name="operador" value="3"> division <br>
            <input type="submit" value="calcular">
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>