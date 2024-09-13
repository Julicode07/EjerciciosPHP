<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 5</title>
</head>

<body>
    <h1>Ejercicio Switch 5</h1>
    <form action="" method="post">
        <label for="calificacion">Ingrese la calificacion (1-100)</label>
        <input type="number" name="calificacion">
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $calificacion = $_POST['calificacion'];
        switch ($calificacion) {
            case $calificacion >= '80' && $calificacion <= '100':
                echo "Su nota es un A";
                break;
            case $calificacion >= '60' && $calificacion <= '79':
                echo "Su nota es un B";
                break;
            case $calificacion >= '40' && $calificacion <= '59':
                echo "Su nota es un C";
                break;
            case $calificacion >= '20' && $calificacion <= '39':
                echo "Su nota es un D";
                break;
            case $calificacion >= '0' && $calificacion <= '19':
                echo "Su nota es un E";
                break;
            default:
                echo "Calificacion no valida";
                break;
        }
    }
    ?>
</body>

</html>