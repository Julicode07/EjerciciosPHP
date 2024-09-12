<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 1</title>
</head>

<body>
    <h1>Condicional Simple 1</h1>
    <form action="" method="post">
        <label for="inversion">Ingrese el monto de la inversion en el banco</label>
        <input type="number" name="inversion">
        <br />
        <label for="tasaInteres">Ingrese la tasa de interes en porcentaje</label>
        <input type="number" name="tasaInteres">
        <br />
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $inversion = $_POST['inversion'];
        $tasaInteres = ($_POST['tasaInteres'] / 100);
        $total = $inversion * ($tasaInteres + 1);
        if ($total > 7000) {
            echo "El monto total de la inversion es:" . $total . "<br>";
        } else {
            echo "El monto total del de la inversion no exede los 7000 por lo tanto no se reinvierte";
        }
    }
    ?>
</body>

</html>