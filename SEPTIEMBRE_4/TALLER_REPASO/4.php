<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
</head>

<body>
    <h1>¡Adivina el número entre 1 y 100!</h1>
    <?php
    session_start();

    if (!isset($_SESSION['numero_aleatorio'])) {
        $_SESSION['numero_aleatorio'] = rand(1, 100);
    }

    if (isset($_POST['suposicion'])) {
        $suposicion = (int) $_POST['suposicion'];
        $numero_aleatorio = $_SESSION['numero_aleatorio'];

        if ($suposicion > $numero_aleatorio) {
            echo "Demasiado alto. Intenta nuevamente.";
        } elseif ($suposicion < $numero_aleatorio) {
            echo "Demasiado bajo. Intenta nuevamente.";
        } else {
            echo "¡Felicidades! Adivinaste el número correcto: $numero_aleatorio";
            unset($_SESSION['numero_aleatorio']);
            echo "<a href=''>Jugar de nuevo</a>";
            exit();
        }
    }
    ?>

    <form action="" method="post">
        <label for="suposicion">Ingresa tu suposición:</label>
        <input type="number" name="suposicion" min="1" max="100" required>
        <button type="submit">Adivinar</button>
    </form>
</body>

</html>