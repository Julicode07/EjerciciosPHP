<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h1>Ejercicio 2</h1>
    <form action="" method="post">
        <label for="p1">Introduzca el precio del producto en el establecimiento #1, en euros</label>
        <input type="number" name="p1">
        <br>
        <label for="p2">Introduzca el precio del producto en el establecimiento #2, en euros</label>
        <input type="number" name="p2">
        <br>
        <label for="p3">Introduzca el precio del producto en el establecimiento #3, en euros</label>
        <input type="number" name="p3">
        <br>
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_REQUEST['submit'])) {
        $p1 = $_REQUEST['p1'];
        $p2 = $_REQUEST['p2'];
        $p3 = $_REQUEST['p3'];
        $media = ($p1 + $p2 + $p3) / 3;
        echo "El precio medio del producto es:" . $media . "euros";
    }
    ?>
</body>

</html>