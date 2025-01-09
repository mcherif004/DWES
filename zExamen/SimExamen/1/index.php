<?php

/**
 * 
 * @author Mostafa Cherif
 * 
 */

require_once "config.php"; // Cargar configuración
require_once "functions.php"; // Cargar funciones

// Variables iniciales
$nombre = $email = $fechaNacimiento = "";
$plataformasSeleccionadas = [];
$publicidad = $terminos = false;
$errores = [];
$mensajeExito = "";

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar nombre
    $nombre = htmlspecialchars($_POST["nombre"]);
    $errores["nombre"] = validarCampo($nombre, "Nombre");

    // Validar email
    $email = htmlspecialchars($_POST["email"]);
    if (empty($email)) {
        $errores["email"] = "El campo Email es obligatorio.";
    } else {
        $errores["email"] = validarEmail($email);
    }

    // Validar fecha de nacimiento
    $fechaNacimiento = htmlspecialchars($_POST["fecha_nacimiento"]);
    $errores["fecha_nacimiento"] = validarCampo($fechaNacimiento, "Fecha de nacimiento");

    // Validar plataformas seleccionadas
    $plataformasSeleccionadas = $_POST["plataformas"] ?? [];
    if (empty($plataformasSeleccionadas)) {
        $errores["plataformas"] = "Debes seleccionar al menos una plataforma.";
    }

    // Validar publicidad
    $publicidad = isset($_POST["publicidad"]) ? true : false;

    // Validar términos y condiciones
    $terminos = isset($_POST["terminos"]) ? true : false;
    if (!$terminos) {
        $errores["terminos"] = "Debes aceptar los términos y condiciones.";
    }

    // Si no hay errores, mostrar mensaje de éxito
    if (array_filter($errores) == []) {
        $mensajeExito = "¡Registro completado con éxito! Gracias por unirte a nuestra plataforma.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro - Streaming</title>
</head>
<body>
    <h2>Registro en la Plataforma de Streaming</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <!-- Nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
        <span style="color: red;"><?php echo $errores["nombre"] ?? ""; ?></span>
        <br><br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $errores["email"] ?? ""; ?></span>
        <br><br>

        <!-- Fecha de nacimiento -->
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fechaNacimiento; ?>">
        <span style="color: red;"><?php echo $errores["fecha_nacimiento"] ?? ""; ?></span>
        <br><br>

        <!-- Selección de plataformas -->
        <label for="plataformas">Selecciona tus plataformas favoritas:</label>
        <select id="plataformas" name="plataformas[]" multiple>
            <?php echo generarOpciones($plataformas); ?>
        </select>
        <span style="color: red;"><?php echo $errores["plataformas"] ?? ""; ?></span>
        <br><br>

        <!-- Publicidad -->
        <label>¿Aceptar recibir publicidad?</label><br>
        <input type="radio" name="publicidad" value="1" <?php echo $publicidad ? "checked" : ""; ?>> Sí<br>
        <input type="radio" name="publicidad" value="0" <?php echo !$publicidad ? "checked" : ""; ?>> No<br>
        <br>

        <!-- Términos y condiciones -->
        <input type="checkbox" name="terminos" value="1" <?php echo $terminos ? "checked" : ""; ?>>
        Acepto los términos y condiciones.
        <span style="color: red;"><?php echo $errores["terminos"] ?? ""; ?></span>
        <br><br>

        <!-- Botón de envío -->
        <input type="submit" value="Registrarse">

        <!-- Botón de reset -->
        <input type="reset" value="Resetear">

    </form>

    <!-- Mensaje de éxito -->
    <?php
    if (!empty($mensajeExito)) {
        echo "<h3 style='color: green;'>$mensajeExito</h3>";
    }
    ?>
</body>
</html>