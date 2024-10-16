<?php

    /**
     * 
     * @author Mostafa Cherif
     * 
     */

     // Carga de un array los dias de la semana
     $diasSemana = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    //Calculamos el numero de dias (tamaño del array)
    $numeroDias = count(value: $diasSemana);
    //Recorremos el array
     for ($i = 0; $i < $numeroDias; $i++) {
     echo $diasSemana[$i];
     echo "<br/>";
    }
?>