<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Palabras</title>
</head>

<body>
    <h1>Contar Palabras</h1>
    <form action="" method="post">
        <label for="frase">Frase</label>
        <input type="text" name="frase">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $frase = strtolower($_POST['frase']);
        $palabras = explode(' ', $frase);
        $numPalabras = count($palabras);
        echo "La frase tiene $numPalabras palabras";
    }
    ?>
</body>

</html>