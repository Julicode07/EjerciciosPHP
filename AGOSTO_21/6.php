<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 6</title>
</head>

<body>
    <h1>Ejercicio Switch 6</h1>
    <form action="" method="post">
        <label for="hora">Ingrese la hora en formato 24 horas</label>
        <input type="number" name="hora">
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hora = $_POST['hora'];
        switch ($hora) {
            case $hora >= '0' && $hora <= '11':
                echo "Buenos Dias";
                break;
            case $hora >= '12' && $hora <= '17':
                echo "Buenas Tardes";
                break;
            case $hora >= '18' && $hora <= '23':
                echo "Buenas Noches";
                break;
            default:
                echo "Hora no valida";
                break;
        }
    }
    ?>
</body>

</html>