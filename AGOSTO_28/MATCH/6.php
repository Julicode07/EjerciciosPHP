<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 6</title>
</head>

<body>
    <h1>Ejercicio con Match 6</h1>
    <form action="" method="post">
        <label for="edad">Ingrese su edad</label>
        <input type="number" name="edad">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $edad = $_POST['edad'];
        echo $edad;
        $categoria = match ($edad) {
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18' => 'Menor de edad',
            '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40' => 'Joven',
            '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65' => 'Adulto',
            default => 'Adulto mayor'
        };
        echo $categoria;
    }
    ?>
</body>

</html>