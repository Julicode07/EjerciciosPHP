<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 7</title>
</head>

<body>
    <h1>Ejercicio Switch 7</h1>
    <form action="" method="post">
        <label for="juego">Ingrese su eleccion</label>
        <select name="juego">
            <option value="1">Piedra</option>
            <option value="2">Papel</option>
            <option value="3">Tijera</option>
        </select>
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    session_start();
    if (!isset($_SESSION['computadora'])) {
        $_SESSION['computadora'] = rand(1, 3);
    }
    if (isset($_POST['submit'])) {
        $juego = $_POST['juego'];
        $computadora = $_SESSION['computadora'];
        switch ($juego) {
            case 1:
                if ($computadora == 1) {
                    echo "Empate";
                } else if ($computadora == 2) {
                    echo "Perdiste";
                } else if ($computadora == 3) {
                    echo "Ganaste";
                }
                unset($_SESSION['computadora']);
                break;
            case 2:
                if ($computadora == 1) {
                    echo "Ganaste";
                } else if ($computadora == 2) {
                    echo "Empate";
                } else if ($computadora == 3) {
                    echo "Perdiste";
                }
                unset($_SESSION['computadora']);
                break;
            case 3:
                if ($computadora == 1) {
                    echo "Perdiste";
                } else if ($computadora == 2) {
                    echo "Ganaste";
                } else if ($computadora == 3) {
                    echo "Empate";
                }
                unset($_SESSION['computadora']);
                break;
        }
    }
    ?>
</body>

</html>