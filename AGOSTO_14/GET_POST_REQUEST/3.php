<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Ejercicio 3</h1>
    <form action="" method="post">
        <label for="caudal">Introduzca el caudal disponible en litros / minuto</label>
        <input type="number" name="caudal">
        <br>
        <label for="diametro">Introduzca el diametro del deposito, en metros</label>
        <input type="number" name="diametro">
        <br>
        <label for="altura">Introduzca la altura del deposito, en metros</label>
        <input type="number" name="altura">
        <br>
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $caudal = $_POST['caudal'];
        $diametro = $_POST['diametro'];
        $altura = $_POST['altura'];
        $radio = $diametro / 2;
        $velocidad = pi() * ($radio * $radio) * $altura;
        $velocidadLitros = $velocidad * 1000;
        $tiempoMinutos = $velocidadLitros / $caudal;
        echo "El tiempo que transcurriria hasta el llenado del deposito es de: " . $tiempoMinutos . " minutos";
    }
    ?>
</body>

</html>