<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con Match 5</title>
</head>

<body>
    <h1>Ejercicio con Match 5</h1>
    <form action="" method="post">
        <label for="cargo">Ingrese el cargo</label>
        <input type="text" name="cargo">
        <button type="submit" name="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $cargo = strtolower($_POST['cargo']);
        $salario = match ($cargo) {
            'gerente' => 'El cargo es Gerente',
            'secretario' => 'El cargo es Secretario',
            'supervisor' => 'El cargo es Supervisor',
            'operario' => 'El cargo es Operario',
            'auxiliar' => 'El cargo es Auxiliar',
            'ingeniero' => 'El cargo es Ingeniero',
            default => 'No se reconoce el cargo'
        };
        echo $salario;
    }
    ?>
</body>

</html>