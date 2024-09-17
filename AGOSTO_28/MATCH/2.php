<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 2</title>
</head>

<body>
    <h1>Ejercicio con Match 2</h1>
    <form action="" method="post">
        <label for="vehiculo">Ingrese el vehiculo</label>
        <input type="text" name="vehiculo">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $vehiculo = strtolower($_POST['vehiculo']);
        $tipoVehiculo = match ($vehiculo) {
            'coche' => 'Tu vehiculo es motorizado',
            'moto' => 'Tu vehiculo es motorizado',
            'bicicleta' => 'Tu vehiculo no es motorizado',
            default => 'No se reconoce el vehiculo'
        };
        echo $tipoVehiculo;
    }
    ?>
</body>

</html>