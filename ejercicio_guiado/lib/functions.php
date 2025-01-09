<?php
// Script con las funciones generales para el proyecto

function clearData($data) {
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

/**
 * Funcion para limpiar los datos
 * @param mixed $data
 * @return string
 */

?>