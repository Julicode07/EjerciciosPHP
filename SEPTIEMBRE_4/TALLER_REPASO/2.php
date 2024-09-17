<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>
    <h1>Factorial</h1>
    <form action="" method="post">
        <label for="num">Ingrese el numero</label>
        <input type="number" name="num">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        echo $factorial;
    }
    ?>
</body>

</html>