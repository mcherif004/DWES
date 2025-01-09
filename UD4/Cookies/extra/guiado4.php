<?php
/**
 * Crea un formulario de login que permita al usuario recordar los datos introducidos.
 * Incluye una opcion para borrar la informacion almacenada.
 */
// Definir un usuario y contraseña correctos para validar

$usuario_correcto = "admin";
$contrasena_correcta = "12345";

// Procesar el formulario al enviar los datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos ingresados
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Validar el usuario y la contraseña
    if (!empty($usuario) && !empty($contrasena)) {
        // Comparar con las credenciales correctas
        if ($usuario == $usuario_correcto && $contrasena == $contrasena_correcta) {
            echo "<p>Bienvenido, $usuario.</p>";
        } else {
            echo "<p>Usuario o contraseña incorrectos. Inténtelo de nuevo.</p>";
        }
    } else {
        echo "<p>Por favor, complete todos los campos.</p>";
    }
}
?>
<!--HTML-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <!-- Formulario HTML -->
    <form action="" method="POST">

        <!--Input del usuario REQUERIDO-->
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"><br><br>

        <!--Input del usuario REQUERIDO-->
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena"><br><br>

        <!--Recordar contraseña-->
        <label for="recordar">Recordar Contraseña</label>
        <input type="checkbox" id="recordar" name="recordar"><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
