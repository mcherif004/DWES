<!-- Carga fecha de nacimiento en variables y calcula la edad. -->

<?php
/** -- Sin ACABAR
*$day = 29;
*$month = 06;
*$year = 2004;

*echo ("Fecha introducida: " . $day . "-" . $month . "-" . $year . "<br><br>");

*$actual_date = date('d-m-Y'); // Es como SYSDATE (d-m-Y formato dia-mes-año) 
*echo "La fecha de hoy es: " . $actual_date;

*list($tday, $tmonth, $tyear) = explode('-',$actual_date);

*$y = $tday - $year;
*$m = $tmonth - $month;
*$a = $tyear - $year;
*/

$date1 = new DateTime('29-6-2004');
$todate = new DateTime();

$pyears = $todate->diff($date1);

echo "La diferencia es de ". $pyears->days . " dias" . "<br>" . "<br>";

$yearsold = ($pyears->days) / 365.25;

$yearsoldround = round($yearsold);

echo "La edad es de " . $yearsoldround . " años" . "<br>" . "<br>";

$alldays = $pyears->days;

$h = $alldays * 24;

echo "Llevas malgastados " . $h . " horas CRACK.";

?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 - Condicionales</title>
</head>
<body>
    <br>
    <a href="./" type="button" id="boton">Volver atras</a>
</body>
</html>