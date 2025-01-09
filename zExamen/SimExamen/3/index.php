<?php
require 'config.php';
require 'functions.php';

$result = "";
$factorialResult = "";
$searchResult = "";
$dayResult = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['number'])) {
        $result = classifyNumber((int)$_POST['number']);
    }
    if (isset($_POST['factorialNumber'])) {
        $factorialResult = calculateFactorial((int)$_POST['factorialNumber']);
    }
    if (isset($_POST['dayNumber'])) {
        $dayResult = getDayOfWeek((int)$_POST['dayNumber'], $daysOfWeek);
    }
    if (isset($_POST['searchValue'])) {
        $array = [10, 20, 30, 40, 50];
        $searchResult = searchInArray((int)$_POST['searchValue'], $array);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen PHP</title>
</head>
<body>
    <h1>Examen PHP</h1>

    <form method="post">
        <h3>1. Clasificar un número</h3>
        <input type="number" name="number" placeholder="Ingrese un número">
        <button type="submit">Verificar</button>
        <p>Resultado: <?= htmlspecialchars($result) ?></p>

        <h3>2. Calcular el factorial</h3>
        <input type="number" name="factorialNumber" placeholder="Ingrese un número">
        <button type="submit">Calcular</button>
        <p>Factorial: <?= htmlspecialchars($factorialResult) ?></p>

        <h3>3. Día de la semana</h3>
        <input type="number" name="dayNumber" min="1" max="7" placeholder="Número (1-7)">
        <button type="submit">Obtener día</button>
        <p>Día: <?= htmlspecialchars($dayResult) ?></p>

        <h3>4. Buscar en array</h3>
        <input type="number" name="searchValue" placeholder="Valor a buscar">
        <button type="submit">Buscar</button>
        <p>Resultado: <?= htmlspecialchars($searchResult) ?></p>
    </form>
</body>
</html>