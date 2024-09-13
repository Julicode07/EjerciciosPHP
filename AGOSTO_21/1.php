<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 1</title>
</head>

<body>
    <h1>Ejercicio Switch 1</h1>
    <form action="" method="post">
        <label for="dia">Ingrese el dia de la semana</label>
        <input type="number" name="dia">
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $dia = $_POST['dia'];

        switch ($dia) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miercoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sabado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "Dia no valido";
                break;
        }
    }
    ?>
</body>

</html>