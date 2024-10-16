<?php
/**
* @author Mostafa Cherif
*/

// 2. Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch

$month = 10;
$year = 2024;

switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $days_month = 31;
        break;
    case 2:
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            $days_month = 29;
        }else {
            $days_month = 28;
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $days_month = 30;
        break;
    default:
        $dias_en_mes = "Mes inválido";
};

echo"El $month mes del año $year tiene $days_month dias";