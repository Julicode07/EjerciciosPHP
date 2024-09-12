<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 2</title>
</head>

<body>
    <h1>Condicional Simple 2</h1>
    <form action="" method="post">
        <h2>Ingrese las notas entre 0 y 100</h2>
        <label for="n1">Ingrese la nota numero 1</label>
        <input type="number" name="n1">
        <label for="n2">Ingrese la nota numero 1</label>
        <input type="number" name="n2">
        <label for="n3">Ingrese la nota numero 1</label>
        <input type="number" name="n3">
        <button type="submit" name="submit">Calcular</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $total = ($n1 + $n2 + $n3) / 3;
        if ($total >= 70) {
            echo "El estudiante aprobo el curso y su nota final fue: " . $total;
        } else {
            echo "El estudiante reprobo el curso y su nota final fue: " . $total;

        }
    }
    ?>
</body>

</html>