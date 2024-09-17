<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Multiplicar</title>
</head>

<body>
    <h1>Tabla Multiplicar</h1>
    <form action="" method="post">
        <label for="num">Ingrese el numero</label>
        <input type="number" name="num">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        for ($i = 1; $i <= 10; $i++) {
            echo $num . " x " . $i . " = " . $num * $i . "<br>";
        }
    }
    ?>
</body>

</html>