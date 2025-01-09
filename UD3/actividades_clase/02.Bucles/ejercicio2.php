<?php
/* 2. Sumar los 3 primeros números pares. */

$suma = 0;

for ($i = 2; $i <= 6; $i += 2) {
    $suma += $i;
}

echo "La suma de los 3 primeros números pares es: " . $suma;
?>