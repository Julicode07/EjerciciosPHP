<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferencia Maxima</title>
</head>

<body>
    <h1>Diferencia Maxima</h1>
    <?php
    $array = array(5, 3, 8, 2, 1, 9, 7, 4, 6);
    echo 'El array original es: ' . implode(", ", $array) . '<br>';
    $max = $array[0];
    $min = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    $diferencia = $max - $min;
    echo 'La diferencia maxima entre los elementos del array es: ' . $diferencia;
    ?>
</body>

</html>