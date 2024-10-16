<?php

// Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch

$mes = 1;
$anio = 2024;

$aniobi = $anio % 4 == 0  && $anio % 100 != 0 || $anio % 400 == 0;

switch($mes){
    case 2:
        if ($anio == $aniobi){
            echo"El $mes mes del año $anio tiene 29 dias";
        }
        else {
            echo "El $mes mes del año $anio tiene 28 dias";
        }
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "El $mes mes del año $anio tiene 31 dias";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "El $mes mes del año $anio tiene 31 dias";
        break;
    default:
        $mes <= 0 || $mes >= 13;
        echo "El $mes mes del año $anio no existe";
}