<?php
/**
 * @author Mostafa Cherif
*/

function generarNumeroA() {
    echo rand(1,3);
}

function testAleatorio () {
    echo "Generar test aleatorio: <input type='submit' name='boton' id='boton' value='Generar'>";
    if (generarNumeroA() == 1) {
        generarPreguntas(); // Del examen 1
        generarRespuestas();
    } else if (generarNumeroA() == 2) {
        generarPreguntas(); // Del examen 1
        generarRespuestas();
    } else {
        generarPreguntas(); // Del examen 1
        generarRespuestas();
    }
}

/**
 * Función para generar preguntas del test
 * @param mixed $array
 * @return string
*/
function generarPreguntas($array) {
    $html = "";
    foreach ($array as $aTests) {
        $html .= "<option value='" . htmlspecialchars($aTests) . "'>" . htmlspecialchars($aTests) . "</option>";
    }
    return $html;
}

/**
 * Función para generar respuetas del test
 * @param mixed $array
 * @return string
*/
function generarRepuestas($array) {
    $html = "";
    foreach ($array as $aTests) {
        $html .= "<option value='" . htmlspecialchars($aTests) . "'>" . htmlspecialchars($aTests) . "</option>";
    }
    return $html;
}

/**
 * Función para validar si un campo está vacío
 * @param mixed $campo
 * @param mixed $nombre
 * @return string
*/
function validarCampo($campo, $nombre) {
    if (empty($campo)) {
        return "El campo $nombre es obligatorio.";
    }
    return "";
}
?>