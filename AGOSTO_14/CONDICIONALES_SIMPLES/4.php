<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 4</title>
</head>

<body>
    <h1>Condicional Simple 4</h1>
    <form action="" method="post">
        <label for="horas">Ingrese sus horas trabajadas</label>
        <input type="number" name="horas">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $horas = $_POST['horas'];
        $horasNormales = 40 * 16;
        $horasExtras = ($horas - 40) * 20;
        $totalHoras = $horasNormales + $horasExtras;
        if ($horas > 40) {
            echo "Horas trabajadas: 40   Total: " . $horasNormales . "<br>";
            echo "Horas extras: " . ($horas - 40) . "   Total: " . $horasExtras . "<br>";
            echo "Total del pago: " . $totalHoras . "<br>";
        } else {
            echo "Horas trabajadas: " . $horas . "   Total: " . $horasNormales . "<br>";
            echo "Total del pago: " . $horasNormales;
        }
    }
    ?>
</body>

</html>