<?php
// Validación de los datos del formulario
function validarDatos($nombre, $email, $password, $telefono, $fechaNacimiento, $url, $terminos) {
    $errores = [];

    if (empty($nombre)) $errores["nombre"] = "El nombre es obligatorio.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores["email"] = "Email no válido.";

    if (empty($password) || strlen($password) < 6) $errores["password"] = "La contraseña debe tener al menos 6 caracteres.";

    if (!preg_match("/^\d{9}$/", $telefono)) $errores["telefono"] = "Teléfono no válido (debe tener 9 dígitos).";

    if (empty($fechaNacimiento)) $errores["fecha_nacimiento"] = "La fecha de nacimiento es obligatoria.";

    if (!filter_var($url, FILTER_VALIDATE_URL)) $errores["url"] = "URL no válida.";

    if (!$terminos) $errores["terminos"] = "Debe aceptar los términos y condiciones.";

    return $errores;
}
?>