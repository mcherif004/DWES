<?php
/**
 * 
 * @author Mostafa Cherif
 * 
 * Crea un formulario con los campos nombre, email y contraseña. 
 * Valida que los campos no estén vacíos y muestra un mensaje de éxito si todo es correcto.
 * 
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario con Validación</title>
</head>
<body>
    <?php
    // Definimos variables para almacenar errores y datos del formulario
    $nombre = $email = $password = "";
    $errorNombre = $errorEmail = $errorPassword = "";
    $mensajeExito = "";

    // Procesar el formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar nombre
        if (empty($_POST["nombre"])) {
            $errorNombre = "El nombre es obligatorio.";
        } else {
            $nombre = htmlspecialchars($_POST["nombre"]);
        }

        // Validar email
        if (empty($_POST["email"])) {
            $errorEmail = "El email es obligatorio.";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errorEmail = "El formato del email no es válido.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        // Validar contraseña
        if (empty($_POST["password"])) {
            $errorPassword = "La contraseña es obligatoria.";
        } else {
            $password = htmlspecialchars($_POST["password"]);
        }

        // Si no hay errores, mostrar mensaje de éxito
        if (empty($errorNombre) && empty($errorEmail) && empty($errorPassword)) {
            $mensajeExito = "¡Formulario enviado con éxito!";
        }
    }
    ?>

    <h2>Formulario de Registro</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
        <span style="color: red;"><?php echo $errorNombre; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $errorEmail; ?></span>
        <br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <span style="color: red;"><?php echo $errorPassword; ?></span>
        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if (!empty($mensajeExito)) {
        echo "<h3 style='color: green;'>$mensajeExito</h3>";
    }
    ?>
</body>
</html>