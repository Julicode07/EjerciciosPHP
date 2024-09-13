<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 8</title>
</head>

<body>
    <h1>Ejercicio Switch 8</h1>
    <form action="" method="post">
        <label for="moneda">Seleccione la moneda que quiere convertir</label>
        <select name="moneda">
            <option value="1">Dólar</option>
            <option value="2">Euro</option>
            <option value="3">Yen</option>
        </select>
        <label for="cant">Ingrese la cantidad</label>
        <input type="number" name="cant">
        <br>
        <label for="moneda2">Seleccione la moneda a la que quiere convertir</label>
        <select name="moneda2">
            <option value="1">Dólar</option>
            <option value="2">Euro</option>
            <option value="3">Yen</option>
        </select>
        <br>
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $moneda = $_POST['moneda'];
        $cant = $_POST['cant'];
        $moneda2 = $_POST['moneda2'];
        $total = 0;
        switch ($moneda) {
            case 1:
                switch ($moneda2) {
                    case 1:
                        $total = $cant;
                        break;
                    case 2:
                        $total = $cant * 0.93;
                        break;
                    case 3:
                        $total = $cant * 147.20;
                        break;
                }
                break;
            case 2:
                switch ($moneda2) {
                    case 1:
                        $total = $cant * 1.07;
                        break;
                    case 2:
                        $total = $cant;
                        break;
                    case 3:
                        $total = $cant * 158.42;
                        break;
                }
                break;
            case 3:
                switch ($moneda2) {
                    case 1:
                        $total = $cant * 0.0068;
                        break;
                    case 2:
                        $total = $cant * 0.0063;
                        break;
                    case 3:
                        $total = $cant;
                        break;
                }
                break;
        }
        echo $total;
    }
    ?>
</body>

</html>