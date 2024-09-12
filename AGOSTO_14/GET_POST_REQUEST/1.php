<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <form action="" method="get">
        <label for="altura">Introduzca el diametro, en metros</label>
        <input type="number" name="diametro">
        <label for="diametro">Introduzca la altura, en metros</label>
        <input type="number" name="altura">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_REQUEST['submit'])) {
        $diametro = $_REQUEST['diametro'];
        $altura = $_REQUEST['altura'];
        $radio = $diametro / 2;
        $volumen = pi() * ($radio * $radio) * $altura;
        echo "El volumen del cilindro es: " . $volumen . " metros cúbicos";
    }
    ?>
</body>

</html>