<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 7</title>
</head>

<body>
    <h1>Condicional Simple 7</h1>
    <form action="" method="post">
        <label for="cantidad">Ingrese el numero de camisetas que desea comprar</label>
        <input type="number" name="cantidad">
        <label for="valor">Ingrese el valor de la camiseta</label>
        <input type="number" name="valor">
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $cantidad = $_POST['cantidad'];
        $valor = $_POST['valor'];
        $total = $cantidad * $valor;
        if ($cantidad >= 3) {
            $descuento = $total * 0.2;
            $totalDescuento = $total - $descuento;
            echo "Usted a obtenido un descuento del 20%, su total a pagar es: $" . $totalDescuento;
        } else {
            $descuento = $total * 0.1;
            $totalDescuento = $total - $descuento;
            echo "Usted a obtenido un descuento del 10%, su total a pagar es: $" . $totalDescuento;
        }
    }
    ?>
</body>

</html>