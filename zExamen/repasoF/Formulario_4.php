<?php
/**
 * 
 * @author Mostafa Cherif
 * Crea un formulario con opciones de checkbox para seleccionar hobbies y una lista de selección múltiple para elegir países. 
 * Al enviar el formulario, muestra las opciones seleccionadas.
 * 
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Hobbies y Países</title>
</head>
<body>
    <?php
    // Inicializamos las variables
    $hobbies = [];
    $paises = [];
    $mensajeHobbies = $mensajePaises = "";

    // Procesar el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar hobbies seleccionados
        if (!empty($_POST["hobbies"])) {
            $hobbies = $_POST["hobbies"]; // Recoge los hobbies seleccionados
        } else {
            $mensajeHobbies = "No seleccionaste ningún hobby.";
        }

        // Validar países seleccionados
        if (!empty($_POST["paises"])) {
            $paises = $_POST["paises"]; // Recoge los países seleccionados
        } else {
            $mensajePaises = "No seleccionaste ningún país.";
        }
    }
    ?>

    <h2>Formulario de Hobbies y Países</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>Selecciona tus hobbies:</legend>
            <input type="checkbox" name="hobbies[]" value="Leer" <?php if (in_array("Leer", $hobbies)) echo "checked"; ?>> Leer<br>
            <input type="checkbox" name="hobbies[]" value="Deportes" <?php if (in_array("Deportes", $hobbies)) echo "checked"; ?>> Deportes<br>
            <input type="checkbox" name="hobbies[]" value="Viajar" <?php if (in_array("Viajar", $hobbies)) echo "checked"; ?>> Viajar<br>
            <input type="checkbox" name="hobbies[]" value="Música" <?php if (in_array("Música", $hobbies)) echo "checked"; ?>> Música<br>
        </fieldset>
        <span style="color: red;"><?php echo $mensajeHobbies; ?></span>
        <br>

        <fieldset>
            <legend>Selecciona tus países favoritos (puedes elegir varios):</legend>
            <select name="paises[]" multiple size="4">
                <option value="España" <?php if (in_array("España", $paises)) echo "selected"; ?>>España</option>
                <option value="México" <?php if (in_array("México", $paises)) echo "selected"; ?>>México</option>
                <option value="Japón" <?php if (in_array("Japón", $paises)) echo "selected"; ?>>Japón</option>
                <option value="Estados Unidos" <?php if (in_array("Estados Unidos", $paises)) echo "selected"; ?>>Estados Unidos</option>
                <option value="Canadá" <?php if (in_array("Canadá", $paises)) echo "selected"; ?>>Canadá</option>
            </select>
        </fieldset>
        <span style="color: red;"><?php echo $mensajePaises; ?></span>
        <br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    // Mostrar las opciones seleccionadas
    if (!empty($hobbies)) {
        echo "<h3>Hobbies seleccionados:</h3>";
        echo "<ul>";
        foreach ($hobbies as $hobby) {
            echo "<li>" . htmlspecialchars($hobby) . "</li>";
        }
        echo "</ul>";
    }

    if (!empty($paises)) {
        echo "<h3>Países seleccionados:</h3>";
        echo "<ul>";
        foreach ($paises as $pais) {
            echo "<li>" . htmlspecialchars($pais) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>