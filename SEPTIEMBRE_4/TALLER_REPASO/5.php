<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Vocales</title>
</head>

<body>
    <h1>Contar Vocales</h1>
    <form action="" method="post">
        <label for="frase">Frase</label>
        <input type="text" name="frase">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $frase = strtolower($_POST['frase']);
        $vocales = array('a', 'e', 'i', 'o', 'u');
        $numVocales = 0;
        for ($i = 0; $i < strlen($frase); $i++) {
            if (in_array($frase[$i], $vocales)) {
                $numVocales++;
            }
        }
        echo "La frase tiene $numVocales vocales";
    }
    ?>
</body>

</html>