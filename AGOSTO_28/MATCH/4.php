<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 4</title>
</head>

<body>
    <h1>Ejercicio con Match 4</h1>
    <form action="" method="post">
        <label for="color">Ingrese un color</label>
        <input type="text" name="color">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $color = strtolower($_POST['color']);
        $hexadecimal = match ($color) {
            'rojo' => 'El Hexadecimal es #FF0000',
            'azul' => 'El Hexadecimal es #0000FF',
            'verde' => 'El Hexadecimal es #00FF00',
            'amarillo' => 'El Hexadecimal es #FFFF00',
            'rosado' => 'El Hexadecimal es #FF00FF',
            'naranja' => 'El Hexadecimal es #FF8000',
            'rosa' => 'El Hexadecimal es #FF1493',
            'morado' => 'El Hexadecimal es #800080',
            'negro' => 'El Hexadecimal es #000000',
            'blanco' => 'El Hexadecimal es #FFFFFF',
            'gris' => 'El Hexadecimal es #808080',
            default => 'No se reconoce el color'
        };
        echo $hexadecimal;
    }
    ?>
</body>

</html>