<?php
// Función para generar opciones de una lista desplegable
function generarOpciones($array) {
    $html = "";
    foreach ($array as $plataforma) {
        $html .= "<option value='" . htmlspecialchars($plataforma) . "'>" . htmlspecialchars($plataforma) . "</option>";
    }
    return $html;
}

// Función para validar si un campo está vacío
function validarCampo($campo, $nombre) {
    if (empty($campo)) {
        return "El campo $nombre es obligatorio.";
    }
    return "";
}

// Función para validar un email
function validarEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "El formato del email no es válido.";
    }
    return "";
}
?>