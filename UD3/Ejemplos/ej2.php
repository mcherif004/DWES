<?php

    /**
     * 
     * @author Mostafa Cherif
     * 
     */

$meses = array(
    "Enero" => "31",
    "Febrero" => array(28, 29),
    "Marzo" => "30",
    "Abril" => "31",
    "Mayo" => "30",
    "Junio" => "31",
    "Julio" => "30",
    "Agosto" => "31",
    "Septiembre" => "30",
    "Octubre" => "31",
    "Noviembre" => "30",
    "Diciembre" => "31",
);

//Code 1

/* 
foreach ($meses as $key => $value) {
    if ($clave === 'Febrero'){
        foreach ($value as $value1) {
        echo "$key tiene $value[0] o $value[1] dias </br>";
        }
    } else{
        echo "El mes $key tiene $value dias <br/>";
    }
}
*/

foreach ($meses as $key => $value) {
    if (is_array($value)) {
        echo " $key tiene $value[0] dias en un año normal y $value1 en un año bisiesto";
    } else{
        echo "$key tiene $value[0] dias. </br> </br>";
    }
}