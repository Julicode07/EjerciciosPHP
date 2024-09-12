<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 3</title>
</head>

<body>
    <h1>Condicional Simple 3 </h1>
    <form action="" method="post">
        <label for="compra">Ingrese el total de su compra</label>
        <input type="number" name="compra">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    $compra = $_POST['compra'];
    if ($compra > 1000) {
        $totalCompra = $compra - ($compra * 0.2);
        echo "Usted ha obtenido un descuento del 20%, su total a pagar es: " . $totalCompra;
    }
    ?>
</body>

</html>