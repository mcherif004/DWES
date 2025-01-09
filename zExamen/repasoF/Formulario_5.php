<?php
/**
 * 
 * @author Mostafa Cherif
 * Realiza un formulario que solicite el email del usuario. 
 * Valida si el email tiene un formato correcto antes de enviarlo y muestra un mensaje de error si es inválido.
 * 
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validación de Email</title>
</head>
<body>
    <?php
    // Inicializamos las variables
    $email = "";
    $errorEmail = "";
    $mensajeExito = "";

    // Procesar el formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar el email
        if (empty($_POST["email"])) {
            $errorEmail = "El campo de email es obligatorio.";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errorEmail = "El formato del email no es válido.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
            $mensajeExito = "El email ingresado es válido: $email";
        }
    }
    ?>

    <h2>Formulario de Validación de Email</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Ingresa tu email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $errorEmail; ?></span>
        <br><br>
        <input type="submit" value="Validar">
    </form>

    <?php
    if (!empty($mensajeExito)) {
        echo "<h3 style='color: green;'>$mensajeExito</h3>";
    }
    ?>
</body>
</html>