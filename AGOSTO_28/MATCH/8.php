<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 8</title>
</head>

<body>
    <h1>Ejercicio con Match 8</h1>
    <form action="" method="post">
        <label for="estadoPedido">Ingrese el estado del pedido</label>
        <input type="text" name="estado">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $estado = strtolower($_POST['estado']);
        $mensaje = match ($estado) {
            'pendiente' => 'El pedido esta pendiente',
            'procesando' => 'El pedido se encuentra procesando',
            'enviado' => 'El pedido ha sido enviado',
            'cancelado' => 'El pedido ha sido cancelado',
            default => 'No se reconoce el estado del pedido'
        };
        echo $mensaje;
    }
    ?>
</body>

</html>