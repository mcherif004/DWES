<?php
/**
 * 
 * @author Mostafa Cherif
 * Escribe un formulario que pida dos números al usuario y, al enviarlo, muestre la suma de los dos números en la misma página.
 * 
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Suma</title>
</head>
<body>
    <?php
    // Inicializamos las variables
    $numero1 = $numero2 = $resultado = "";
    $error1 = $error2 = "";

    // Procesar el formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar el primer número
        if (empty($_POST["numero1"])) {
            $error1 = "Por favor, ingresa el primer número.";
        } elseif (!is_numeric($_POST["numero1"])) {
            $error1 = "Debe ser un número válido.";
        } else {
            $numero1 = htmlspecialchars($_POST["numero1"]);
        }

        // Validar el segundo número
        if (empty($_POST["numero2"])) {
            $error2 = "Por favor, ingresa el segundo número.";
        } elseif (!is_numeric($_POST["numero2"])) {
            $error2 = "Debe ser un número válido.";
        } else {
            $numero2 = htmlspecialchars($_POST["numero2"]);
        }

        // Si no hay errores, calcular la suma
        if ($error1 === "" && $error2 === "") {
            $resultado = $numero1 + $numero2;
        }
    }
    ?>

    <h2>Suma de Dos Números</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero1">Primer número:</label>
        <input type="text" id="numero1" name="numero1" value="<?php echo $numero1; ?>">
        <span style="color: red;"><?php echo $error1; ?></span>
        <br><br>

        <label for="numero2">Segundo número:</label>
        <input type="text" id="numero2" name="numero2" value="<?php echo $numero2; ?>">
        <span style="color: red;"><?php echo $error2; ?></span>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Mostrar el resultado si fue calculado
    if ($resultado !== "") {
        echo "<h3>La suma de $numero1 y $numero2 es: $resultado</h3>";
    }
    ?>
</body>
</html>