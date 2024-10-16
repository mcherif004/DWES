<?php
// Pagina 31
/**
* Crea un script que defina un array de números enteros y utilizando una función
* anónima genere un array con el cuadrado de los mismos.
*/

// Definimos un array de números enteros
$numeros = [1, 2, 3, 4, 5];

// Usamos array_map con una función anónima para generar un nuevo array con los cuadrados
$cuadrados = array_map(function($num) {
    return $num * $num;
}, $numeros);

// Mostramos el resultado
print_r($cuadrados); // [1, 4, 9, 16, 25]