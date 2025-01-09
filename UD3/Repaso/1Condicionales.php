<?php

//Salto

function salto() {
    echo "<br>";
    echo "<br>";
}

// Escribe un script que verifique si un número es positivo, negativo o cero.

$numero = 3;

if (!is_numeric($numero)) {
    echo "Por favor, ingresa un valor numérico válido.\n";
} else {
    // Determinar si el número es positivo, negativo o cero.
    if ($numero > 0) {
        echo "El número $numero es positivo.\n";
    } elseif ($numero < 0) {
        echo "El número $numero es negativo.\n";
    } else {
        echo "El número ingresado es cero.\n";
    }
}

salto();

// Dado tres números, determina cuál es el mayor de los tres.

$a = 0;
$b = 0;
$c = 0;

if ($a > $b && $a > $c) {
    echo "$a es el numero mayor";
} else if ($b > $a && $b > $c) {
    echo "$b es el numero mayor";
} else if ($a == $b && $a == $c) {
    echo "Los tres numeros son iguales $a = $b = $c";
} else {
    echo "$c es el numero mayor";
}

salto();

// Escribe un programa que clasifique a una persona según su edad: "niño", "adolescente", "adulto" o "anciano".

$edad = 20;

if ($edad < 12) {
    echo "Eres un niño";
} else if ($edad >= 12 && $edad <= 17) {
    echo "Eres un adolescente";
} else if ($edad >= 18 && $edad <= 50) {
    echo "Eres un adulto";
} else if ($edad > 50) {
    echo "Eres un anciano";
}

salto();

// Crea un script que reciba un número entre 1 y 7, y muestre el día de la semana correspondiente (1 es Lunes, 7 es Domingo).

$dia = 1;

switch ($dia):
    case 1:
        echo "Es Lunes";
        break;
    case 2:
        echo "Es Martes";
        break;
    case 3:
        echo "Es Miercoles";
        break;
    case 4:
        echo "Es Jueves";
        break;
    case 5:
        echo "Es Viernes";
        break;
    case 6:
        echo "Es Sabado";
        break;
    case 7:
        echo "Es Domingo";
        break;
    default:
        echo "Error introduce un numero entre 1 y el 7";
endswitch;