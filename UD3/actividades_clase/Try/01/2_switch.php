<!-- Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch -->

<?php
$day = 0;
$month = 11;
$year = 2024;

switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $dias = 31;
        echo ("El " . $month . " de " . $year . " tiene $day dias");
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $day = 30;
        echo ("El " . $month . " de " . $year . " tiene $day dias");
        break;
    case 2:
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            $day = 29;
        } else {
            $day = 28;
        }
        echo ("El " . $month . " de " . $year . " tiene $day dias");    
        break;
    default:
        echo ("Numero invalido. Introduce un numero del 1 al 12");
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 - Condicionales</title>
</head>
<body>
    <br>
    <a href="./" type="button" id="boton">Volver atras</a>
</body>
</html>