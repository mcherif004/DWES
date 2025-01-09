<?php
/**
 * 
 * @author Mostafa Cherif
 * @date 19/11/2024
 */

require_once "config.php"; // Cargar configuración
require_once "functions.php"; // Cargar funciones

// Variables iniciales
$nombre = "";
$rcorrectas = 0;
$rincorrectas = 0; //Repuestas incorrectas
$date = new DateTime(); // Fecha actual

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar nombre
    $nombre = htmlspecialchars($_POST["nombre"]);
    $errores["nombre"] = validarCampo($nombre, "Nombre");

    // Validar repuestas
    $rcorrectas = isset($_POST["respuestas"]) ? true : false;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen UD3</title>
</head>
<body>
    <form action="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre del Alumno</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <!-- Preguntas de a, b, c, d -->
        <label><?php  ?></label><br>
        <input type="checkbox" name="respuestas" value="1" <?php echo generarRepuestas($aTests) ? "checked" : ""; ?>><?php echo 0; ?><br>
        <input type="checkbox" name="respuestas" value="2" <?php echo generarRepuestas($aTests) ? "checked" : ""; ?>><?php echo 0; ?><br>
        <input type="checkbox" name="respuestas" value="3" <?php echo generarRepuestas($aTests) ? "checked" : ""; ?>><?php echo 0; ?><br>
        <input type="checkbox" name="respuestas" value="4" <?php echo generarRepuestas($aTests) ? "checked" : ""; ?>><?php echo 0; ?><br>
        <br>

        <!-- Selección de plataformas -->
        <label for="respuestas"><?php  ?></label>
        <input type="checkbox" id="respuetas" name="repuestas[]" multiple>
            <?php echo generarRepuestas($aTests); ?>
        </input>
        <span style="color: red;"><?php echo $errores["plataformas"] ?? ""; ?></span>
        <br><br>

        <!-- Preguntas de Verdadero o Falso -->
        <input type="checkbox" name="preguntas" value="1" <?php echo $preguntas ? "checked" : ""; ?>>
        <span style="color: red;"><?php echo $errores["preguntas"] ?? ""; ?></span>
        <br><br>

        <!-- Botón de envío -->
        <input type="submit" value="Registrarse">

        <!-- Botón de reset -->
        <input type="reset" value="Resetear">

    </form>
</body>
</html>