<?php

/**
 * 
 * @author Mostafa Cherif
 * 
 */

// Incluir archivos de configuración y funciones
require_once "config.php";
require_once "functions.php";

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Saneamiento de datos
    $nombre = sanitizeInput($_POST["nombre"]);
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);
    $telefono = sanitizeInput($_POST["telefono"]);
    $fechaNacimiento = sanitizeInput($_POST["fecha_nacimiento"]);
    $url = sanitizeInput($_POST["url"]);
    $terminos = isset($_POST["terminos"]);
    $plano = isset($_POST["plano"]);
    $premium = isset($_POST["premium"]);

    // Validar los datos
    $errores = validarDatos($nombre, $email, $password, $telefono, $fechaNacimiento, $url, $terminos);

    // Calcular la cuota si el formulario es válido
    if (empty($errores)) {
        $cuota = calcularCuota($plano, $premium);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>

<h2>Formulario de Registro</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <!-- Nombre -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?? ''; ?>">
    <span style="color: red;"><?php echo $errores["nombre"] ?? ""; ?></span>
    <br><br>

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo $email ?? ''; ?>">
    <span style="color: red;"><?php echo $errores["email"] ?? ""; ?></span>
    <br><br>

    <!-- Contraseña -->
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" value="<?php echo $password ?? ''; ?>">
    <span style="color: red;"><?php echo $errores["password"] ?? ""; ?></span>
    <br><br>

    <!-- Teléfono -->
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="<?php echo $telefono ?? ''; ?>">
    <span style="color: red;"><?php echo $errores["telefono"] ?? ""; ?></span>
    <br><br>

    <!-- Fecha de nacimiento -->
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fechaNacimiento ?? ''; ?>">
    <span style="color: red;"><?php echo $errores["fecha_nacimiento"] ?? ""; ?></span>
    <br><br>

    <!-- URL -->
    <label for="url">URL de perfil:</label>
    <input type="text" id="url" name="url" value="<?php echo $url ?? ''; ?>">
    <span style="color: red;"><?php echo $errores["url"] ?? ""; ?></span>
    <br><br>

    <!-- Opciones de suscripción -->
    <label for="plano">Selecciona tu plan:</label>
    <input type="radio" id="plano" name="plano" value="1" <?php echo $plano ? "checked" : ""; ?>> Plano Básico
    <input type="radio" id="premium" name="premium" value="1" <?php echo $premium ? "checked" : ""; ?>> Plan Premium
    <br><br>

    <!-- Términos y condiciones -->
    <input type="checkbox" name="terminos" value="1" <?php echo $terminos ? "checked" : ""; ?>> Acepto los términos y condiciones
    <span style="color: red;"><?php echo $errores["terminos"] ?? ""; ?></span>
    <br><br>

    <!-- Botón de Enviar -->
    <input type="submit" name ="submit" value="Registrarse">
    <input type="reset" name="reset" value="Restablecer">

</form>

<?php
// Mostrar el desglose de la cuota si el formulario es válido
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errores)) {
    echo "<h3>Resumen de la Cuota:</h3>";
    echo "<p>Plan seleccionado: " . ($plano ? "Plano Básico" : ($premium ? "Plan Premium" : "Ninguno")) . "</p>";
    echo "<p>Cuota a pagar: $" . $cuota . " al mes</p>";
}
?>

</body>
</html>