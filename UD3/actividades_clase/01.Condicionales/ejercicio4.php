<?php

//4. Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la estación del año en la que nos encontremos y un color de fondo en función de la hora del día.

// Variables que almacenan los valores para la imagen y el fondo del HTML.
$background_color = '#FFFFFF';
$img_code = 0;

// Adquirimos la fecha de nuestro dispositivo y la asignamos en una variable.
$today_date = new DateTime();

////// echo $today_date->format('Y-m-d H:i:sP') . "\n";

/* Obtenemos la hora y mes del año y los asignamos a variables junto a un cambio
de tipos a entero. */

$hour = $today_date->format('H');
settype($hour, "integer");
$month = $today_date->format('m');
settype($month, "integer");

// Cambiamos la imagen en función del mes del año
if ($month >= 9 && $month <= 11) {
    $img_code = "img/otoño.jpg";
}
else if ($month >= 3 && $month <= 5) {
    $img_code = "img/primavera.jpg";
}
else if ($month >= 6 && $month <= 8) {
    $img_code = "img/verano.jpg";
}
else {
    $img_code = "img/invierno.jpg";
}

// Cambiamos el fondo de la página en función de la hora del día
if ($hour >= 0 && $hour <= 8) {
    $background_color = '#28103E';
} 
else if ($hour >= 9 && $hour <= 18){
    $background_color = '#52A6D0';
}
else {
    $background_color = 'coral';
}