<?php
// Inicialización de variables
$nombre = $email = $password = $telefono = $fechaNacimiento = $url = "";
$cuota = 0;
$errores = [];
$terminos = false;
$plano = $premium = false;

// Calcular cuota dependiendo del plan elegido
function calcularCuota($plano, $premium) {
    if ($plano) {
        return 10;
    } elseif ($premium) {
        return 20;
    }
    return 0;
}

// Función de saneamiento de datos
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}
?>