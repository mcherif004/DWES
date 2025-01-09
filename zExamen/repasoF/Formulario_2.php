<?php
/**
 * 
 * @author Mostafa Cherif
 * 
 * Crea un formulario que permita ingresar una temperatura en grados Celsius y que al enviarlo, 
 * muestre la temperatura convertida a Fahrenheit.
 * 
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Conversión de Temperatura</title>
</head>
<body>
    <?php
    // Inicializamos las variables
    $celsius = "";
    $fahrenheit = "";
    $error = "";

    // Procesamos el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["celsius"])) {
            $error = "Por favor, ingresa una temperatura en Celsius.";
        } elseif (!is_numeric($_POST["celsius"])) {
            $error = "La temperatura debe ser un número.";
        } else {
            $celsius = htmlspecialchars($_POST["celsius"]);
            $fahrenheit = ($celsius * 9 / 5) + 32; // Fórmula de conversión
        }
    }
    ?>

    <h2>Conversión de Temperatura</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="celsius">Temperatura en Celsius:</label>
        <input type="text" id="celsius" name="celsius" value="<?php echo $celsius; ?>">
        <span style="color: red;"><?php echo $error; ?></span>
        <br><br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($fahrenheit !== "") {
        echo "<h3>La temperatura en Fahrenheit es: $fahrenheit °F</h3>";
    }
    ?>
</body>
</html>