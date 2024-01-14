<?php
include(__DIR__ . "/clases/Calculo.php");

$resultado = 0;
$anchoPliego = 0;
$altoPliego = 0;
$anchoCorte = 0;
$altoCorte = 0;

if (isset($_POST["pliego-x"], $_POST["pliego-y"], $_POST["corte-x"], $_POST["corte-y"])) {
    $anchoPliego = $_POST["pliego-x"];
    $altoPliego = $_POST["pliego-y"];
    $anchoCorte = $_POST["corte-x"];
    $altoCorte = $_POST["corte-y"];

    $calculoCorte = new Calculo();

    $resultado = $calculoCorte->cantidadMaxima($_POST["pliego-x"], $_POST["pliego-y"], $_POST["corte-x"], $_POST["corte-y"]);
} else {
    echo "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php __DIR__ ?>css/style.css">
    <title>Calculadora de corte de papel</title>
</head>

<body>
    <h1>calculadora de corte de papel</h1>

    <div class="container">
        <form action="index.php" method="post">

            <label for="pliego-x">Ancho del pliego</label>
            <input type="text" id="pliego-x" name="pliego-x">

            <label for="pliego-y">Alto del pliego</label>
            <input type="text" id="pliego-y" name="pliego-y">

            <label for="corte-x">Ancho del corte</label>
            <input type="text" id="corte-x" name="corte-x">

            <label for="corte-y">Alto del corte</label>
            <input type="text" id="corte-y" name="corte-y">

            <button type="submit">Calcular</button>
        </form>

        <div class="container-datos">

            <div class="container-medidas">
                <p>Ancho del pliego: <?= $anchoPliego; ?> cm</p>
                <p>Alto del pliego: <?= $altoPliego; ?> cm</p>
                <p>Ancho del corte: <?= $anchoCorte; ?> cm</p>
                <p>Alto del corte: <?= $altoCorte; ?> cm</p>
            </div>
            <div class="container-resultado">

                <h2>Cantidad de tamaños: <?= $resultado; ?></h2>
            </div>
        </div>
    </div>



</body>

</html>