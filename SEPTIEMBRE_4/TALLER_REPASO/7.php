<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar Mediana</title>
</head>

<body>
    <h1>Encontrar Mediana</h1>
    <form action="" method="post">
        <label for="numeros">Ingrese los numeros separados por comas:</label>
        <input type="text" name="numeros">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $numeros = explode(',', $_POST['numeros']);
        sort($numeros);
        $mediana = count($numeros) / 2;
        $mediana = ($numeros[$mediana - 1] + $numeros[$mediana]) / 2;
        echo "La mediana es: " . $mediana;
    }
    ?>
</body>

</html>