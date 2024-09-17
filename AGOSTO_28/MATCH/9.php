<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 9</title>
</head>

<body>
    <h1>Ejercicio con Match 9</h1>
    <form action="" method="post">
        <label for="generoLibro">Ingrese el genero del libro</label>
        <input type="text" name="genero">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $genero = strtolower($_POST['genero']);
        $generoLibro = match ($genero) {
            'novela' => 'El genero es Novela',
            'ciencia ficcion' => 'El genero es Ciencia Ficcion',
            'fantasia' => 'El genero es Fantasia',
            'terror' => 'El genero es Terror',
            'romance' => 'El genero es Romance',
            default => 'No se reconoce el genero'
        };
        echo $generoLibro;
    }
    ?>
</body>

</html>