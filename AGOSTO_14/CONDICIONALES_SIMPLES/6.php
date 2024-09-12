<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionale Simple 6</title>
</head>

<body>
    <h1>Condicional Simple 6</h1>
    <form action="" method="post">
        <label for="actividad">Seleccione una actividad:</label>
        <select name="actividad">
            <option value="reposo">Reposo</option>
            <option value="dormido">Dormido</option>
        </select>
        <br>
        <label for="tiempo">Ingrese el tiempo en minutos:</label>
        <input type="number" name="tiempo">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $actividad = $_POST['actividad'];
        $tiempo = $_POST['tiempo'];
        if ($actividad == "reposo") {
            $calorias = $tiempo * 1.66;
            echo "Su cuerpo en estado de reposo, en " . $tiempo . " minutos, consumio " . $calorias . " calorias";
        } else {
            $calorias = $tiempo * 1.08;
            echo "Su cuerpo en estado de sueño, en " . $tiempo . " minutos, consumio " . $calorias . " calorias";
        }
    }
    ?>
</body>

</html>