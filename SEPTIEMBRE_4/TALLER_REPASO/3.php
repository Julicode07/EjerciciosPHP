<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Arreglo</title>
</head>

<body>
    <h1>Ordenar Arreglo</h1>
    <?php
    $array = array(5, 3, 8, 2, 1, 9, 7, 4, 6);
    echo 'El array original es: ' . implode(", ", $array) . '<br>';
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $aux = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $aux;
            }
        }
    }
    echo 'El array ordenado es: ' . implode(", ", $array);
    ?>
</body>

</html>