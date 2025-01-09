<?php
function classifyNumber($number) {
    if ($number > 0) {
        return "Positivo";
    } elseif ($number < 0) {
        return "Negativo";
    } else {
        return "Cero";
    }
}

function getDayOfWeek($dayNumber, $daysOfWeek) {
    return $daysOfWeek[$dayNumber] ?? "Número inválido";
}

function calculateFactorial($number) {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

function averageArray($array) {
    return array_sum($array) / count($array);
}

function searchInArray($value, $array) {
    return in_array($value, $array) ? "Valor encontrado" : "Valor no encontrado";
}
?>