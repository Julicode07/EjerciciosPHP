<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 3</title>
</head>

<body>
    <h1>Ejercicio Switch 3</h1>
    <form action="" method="post">
        <label for="tMedida">Seleccione la medida que quiere convertir:</label>
        <select name="tMedida">
            <option value="1">Metro</option>
            <option value="2">Pulgada</option>
            <option value="3">Centimetro</option>
            <option value="4">Pies</option>
        </select>
        <label for="medida">Ingrese la medida</label>
        <input type="number" name="medida">
        <br>
        <label for="cMedida">Seleccione la medida a la que quiere convertir:</label>
        <select name="cMedida">
            <option value="1">Metro</option>
            <option value="2">Pulgada</option>
            <option value="3">Centimetro</option>
            <option value="4">Pies</option>
        </select>
        <br>
        <button type="submit" name="submit">Convertir</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tMedida = $_POST['tMedida'];
        $medida = $_POST['medida'];
        $cMedida = $_POST['cMedida'];
        $total = 0;
        switch ($tMedida) {
            case 1:
                switch ($cMedida) {
                    case 1:
                        $total = $medida;
                        break;
                    case 2:
                        $total = $medida * 39.37;
                        break;
                    case 3:
                        $total = $medida * 100;
                        break;
                    case 4:
                        $total = $medida * 3.28;
                        break;
                }
                break;
            case 2:
                switch ($cMedida) {
                    case 1:
                        $total = $medida / 39.37;
                        break;
                    case 2:
                        $total = $medida;
                        break;
                    case 3:
                        $total = $medida * 2.54;
                        break;
                    case 4:
                        $total = $medida * 12;
                        break;
                }
                break;
            case 3:
                switch ($cMedida) {
                    case 1:
                        $total = $medida / 100;
                        break;
                    case 2:
                        $total = $medida / 2.54;
                        break;
                    case 3:
                        $total = $medida;
                        break;
                    case 4:
                        $total = $medida / 12;
                        break;
                }
                break;
            case 4:
                switch ($cMedida) {
                    case 1:
                        $total = $medida / 3.28;
                        break;
                    case 2:
                        $total = $medida * 12;
                        break;
                    case 3:
                        $total = $medida * 30.48;
                        break;
                    case 4:
                        $total = $medida;
                        break;
                }
                break;
        }
        echo $total;
    }
    ?>
</body>

</html>