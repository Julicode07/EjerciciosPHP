<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Switch 4</title>
</head>

<body>
    <h1>Ejercicio Switch 4</h1>
    <form action="" method="post">
        <label for="n1">Ingrese el primer numero</label>
        <input type="number" name="n1">
        <br>
        <br>
        <label for="operadores">Seleccione el operador</label>
        <select name="operadores">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
        </select>
        <br>
        <br>
        <label for="n2">Ingrese el segundo numero</label>
        <input type="number" name="n2">
        <button type="submit" name="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $operadores = $_POST['operadores'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        switch ($operadores) {
            case 1:
                $total = $n1 + $n2;
                break;
            case 2:
                $total = $n1 - $n2;
                break;
            case 3:
                $total = $n1 * $n2;
                break;
            case 4:
                $total = $n1 / $n2;
                break;
        }
        echo $total;
    }
    ?>
</body>

</html>