<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 5</title>
</head>

<body>
    <h1>Condicional Simples 5</h1>
    <form action="" method="post">
        <label for="n1">Ingrese el numero 1</label>
        <input type="number" name="n1">
        <br>
        <label for="n2">Ingrese el numero 2</label>
        <input type="number" name="n2">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <p>Que lea los dos numeros y los imprima en forma ascendente</p>
    <?php
    if (isset($_POST['submit'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        if ($n1 > $n2) {
            echo "El numero mayor es: " . $n1 . "<br>";
            echo "El numero menor es: " . $n2;
        } else {
            echo "El numero mayor es: " . $n2 . "<br>";
            echo "El numero menor es: " . $n1;
        }
    }
    ?>
</body>

</html>