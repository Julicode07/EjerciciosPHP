<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 7</title>
</head>

<body>
    <h1>Ejercicio con Match 7</h1>
    <form action="" method="post">
        <label for="abreviaturaZonaHoraria">Ingrese la abreviatura de la zona horaria</label>
        <input type="text" name="abreviaturaZonaHoraria">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $abreviaturaZonaHoraria = strtolower($_POST['abreviaturaZonaHoraria']);
        $zonaHoraria = match ($abreviaturaZonaHoraria) {
            'est' => 'Zona Horaria Eastern Standard Time',
            'cst' => 'Zona Horaria Central Standard Time',
            'mst' => 'Zona Horaria Mountain Standard Time',
            'pst' => 'Zona Horaria Pacific Standard Time',
            'ast' => 'Zona Horaria Atlantic Standard Time',
            'jst' => 'Zona Horaria Japan Standard Time',
            'utc' => 'Zona Horaria UTC',
            'gmt' => 'Zona Horaria Greenwich Mean Time',
            'bst' => 'Zona Horaria British Summer Time',
            default => 'No se reconoce la abreviatura de la zona horaria'
        };
        echo $zonaHoraria;
    }
    ?>
</body>

</html>