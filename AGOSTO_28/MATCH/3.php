<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 3</title>
</head>

<body>
    <h1>Ejercicio con Match 3</h1>
    <form action="" method="post">
        <label for="clima">Ingrese el estado del clima</label>
        <input type="text" name="clima">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $clima = strtolower($_POST['clima']);
        $estadoClima = match ($clima) {
            "soleado" => "Es un buen día para pasear o salir a la playa",
            "nublado" => "Es un buen día para salir a la calle",
            "lluvioso" => "Es un buen día para quedarse en casa",
            "nevado" => "Es un buen día para salir a la montaña",
            "tormenta" => "Es un buen día para quedarse en casa",
            default => "No se ha ingresado un estado válido"
        };
        echo $estadoClima;
    }
    ?>
</body>

</html>