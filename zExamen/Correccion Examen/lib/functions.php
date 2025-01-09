<?php
/**
* Función utilizada para limpiar los datos de entrada utilizando un array
* 
* @param [array] $dato
* @return array
*/

function clearData($dato) {
    if (is_array($dato)) {
        // Si es array, aplica la limpieza recursivamente
        return array_map('clearData', $dato);
    }
    //Limpieza para valores simples
    return htmlspecialchars(stripslashes(trim($dato)), ENT_QUOTES, 'UTF-8');
}