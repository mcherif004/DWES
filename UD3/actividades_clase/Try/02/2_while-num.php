<!--Sumar los 3 primeros numeros pares-->

<?php
$suma = 0;
$contador = 0;
$numero = 2; // Numero por el que se empieza (nº2 el primer par)

while ($contador < 3) {
    $suma += $numero;
    $numero += 2;
    $contador++;
}

echo "La suma de los 3 primeros numeros pares es: $suma";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 - Bucles</title>
</head>
<body>
    <br>
    <a href="./" type="button" id="boton">Volver atras</a>
</body>
</html>