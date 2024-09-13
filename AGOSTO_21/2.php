<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 2</title>
</head>

<body>
    <h1>Ejercicio Switch 2</h1>
    <form action="" method="post">
        <label for="mes">Ingrese un mes del año del 1 al 12</label>
        <input type="number" name="mes">
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $mes = $_POST['mes'];   

        switch ($mes) {
            case 1:
                echo "Enero";
                break;
            case 2:
                echo "Febrero";
                break;
            case 3:
                echo "Marzo";
                break;
            case 4:
                echo "Abril";
                break;
            case 5:
                echo "Mayo";
                break;
            case 6:
                echo "Junio";
                break;
            case 7:
                echo "Julio";
                break;
            case 8:
                echo "Agosto";
                break;
            case 9:
                echo "Septiembre";
                break;
            case 10:
                echo "Octubre";
                break;
            case 11:
                echo "Noviembre";
                break;
            case 12:
                echo "Diciembre";
                break;
            default:
                echo "Mes no valido";
                break;
        }
    }
    ?>
</body>

</html>