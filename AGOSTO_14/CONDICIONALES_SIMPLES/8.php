<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Simple 8</title>
</head>

<body>

    <h1>Condicional Simple 8</h1>
    <form action="" method="post">
        <label for="monto">Ingrese el monto total de la compra:</label>
        <input type="number" name="monto" id="monto" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = $_POST["monto"];

        if ($monto > 500000) {
            $inversion = $monto * 0.55;
            $prestamoBanco = $monto * 0.3;
            $creditoFabricante = $monto - $inversion - $prestamoBanco;
            $interesesCredito = $creditoFabricante * 0.2;
            $totalPagar = $inversion + $prestamoBanco + $creditoFabricante + $interesesCredito;
            echo "La empresa podra invertir " . $inversion . "<br>";
            echo "Prestado al banco " . $prestamoBanco . "<br>";
            echo "Crédito solicitado al fabricante " . $creditoFabricante . "<br>";
            echo "Intereses por crédito " . $interesesCredito . "<br>";
            echo "Total a pagar " . $totalPagar . "<br>";
        } else {
            $inversion = $monto * 0.7;
            $creditoFabricante = $monto - $inversion;
            $interesesCredito = $creditoFabricante * 0.2;
            $totalPagar = $inversion + $creditoFabricante + $interesesCredito;
            echo "La empresa podra invertir " . $inversion . "<br>";
            echo "Crédito solicitado al fabricante " . $creditoFabricante . "<br>";
            echo "Intereses por crédito " . $interesesCredito . "<br>";
            echo "Total a pagar " . $totalPagar . "<br>";
        }
    }
    ?>
    </form>
</body>

</html>