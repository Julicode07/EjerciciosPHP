<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 1</title>
</head>

<body>
    <h1>Ejercicio con Match 1</h1>
    <form action="" method="post">
        <label for="genero">Introduce el genero de la pelicula:</label>
        <input type="text" name="genero">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $genero = strtolower($_POST['genero']);
        $categoria = match ($genero) {
            'accion' => 'Acción',
            'comedia' => 'Comedia',
            'drama' => 'Drama',
            'terror' => 'Terror',
            'ciencia ficcion' => 'Ciencia Ficción',
            'aventura' => 'Aventura',
            'romance' => 'Romance',
            'documental' => 'Documental',
            'musical' => 'Musical',
            'fantasia' => 'Fantasía',
            'animacion' => 'Animación',
            'suspenso' => 'Suspenso',
            'western' => 'Western',
            'historia' => 'Historia',
            'belica' => 'Belica',
            'guerra' => 'Guerra',
            'misterio' => 'Misterio',
            'thriller' => 'Thriller',
            default => 'Genero no válido'
        };
        echo "La categoria de la pelicula es: $categoria";
    }
    ?>
</body>

</html>