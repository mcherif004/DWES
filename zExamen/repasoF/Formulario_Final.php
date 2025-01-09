<!DOCTYPE html>
<html>
<head>
    <title>Formulario Completo</title>
</head>
<body>
    <?php
    // Inicializamos variables
    $celsius = $numero1 = $numero2 = $email = "";
    $hobbies = [];
    $paises = [];
    $errors = [];
    $resultados = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar temperatura en Celsius
        if (isset($_POST["celsius"])) {
            if (empty($_POST["celsius"])) {
                $errors["celsius"] = "Ingresa una temperatura.";
            } elseif (!is_numeric($_POST["celsius"])) {
                $errors["celsius"] = "La temperatura debe ser un número.";
            } else {
                $celsius = htmlspecialchars($_POST["celsius"]);
                $resultados["fahrenheit"] = ($celsius * 9 / 5) + 32;
            }
        }

        // Validar números para suma
        if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {
            if (empty($_POST["numero1"]) || !is_numeric($_POST["numero1"])) {
                $errors["numero1"] = "Ingresa un número válido.";
            } else {
                $numero1 = htmlspecialchars($_POST["numero1"]);
            }

            if (empty($_POST["numero2"]) || !is_numeric($_POST["numero2"])) {
                $errors["numero2"] = "Ingresa un número válido.";
            } else {
                $numero2 = htmlspecialchars($_POST["numero2"]);
            }

            if (!isset($errors["numero1"]) && !isset($errors["numero2"])) {
                $resultados["suma"] = $numero1 + $numero2;
            }
        }

        // Validar email
        if (isset($_POST["email"])) {
            if (empty($_POST["email"])) {
                $errors["email"] = "El campo de email es obligatorio.";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = "Formato de email no válido.";
            } else {
                $email = htmlspecialchars($_POST["email"]);
                $resultados["email"] = "Email válido: $email";
            }
        }

        // Validar hobbies
        if (isset($_POST["hobbies"])) {
            $hobbies = $_POST["hobbies"];
        } else {
            $errors["hobbies"] = "Selecciona al menos un hobby.";
        }

        // Validar países
        if (isset($_POST["paises"])) {
            $paises = $_POST["paises"];
        } else {
            $errors["paises"] = "Selecciona al menos un país.";
        }
    }
    ?>

    <h2>Formulario Completo</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <!-- Temperatura -->
        <fieldset>
            <legend>Conversión de Temperatura</legend>
            <label for="celsius">Celsius:</label>
            <input type="text" id="celsius" name="celsius" value="<?php echo $celsius; ?>">
            <span style="color: red;"><?php echo $errors["celsius"] ?? ""; ?></span>
        </fieldset>

        <!-- Suma de Números -->
        <fieldset>
            <legend>Suma de Dos Números</legend>
            <label for="numero1">Número 1:</label>
            <input type="text" id="numero1" name="numero1" value="<?php echo $numero1; ?>">
            <span style="color: red;"><?php echo $errors["numero1"] ?? ""; ?></span>
            <br>
            <label for="numero2">Número 2:</label>
            <input type="text" id="numero2" name="numero2" value="<?php echo $numero2; ?>">
            <span style="color: red;"><?php echo $errors["numero2"] ?? ""; ?></span>
        </fieldset>

        <!-- Email -->
        <fieldset>
            <legend>Validación de Email</legend>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            <span style="color: red;"><?php echo $errors["email"] ?? ""; ?></span>
        </fieldset>

        <!-- Hobbies -->
        <fieldset>
            <legend>Selecciona tus Hobbies</legend>
            <input type="checkbox" name="hobbies[]" value="Leer" <?php if (in_array("Leer", $hobbies)) echo "checked"; ?>> Leer<br>
            <input type="checkbox" name="hobbies[]" value="Deportes" <?php if (in_array("Deportes", $hobbies)) echo "checked"; ?>> Deportes<br>
            <input type="checkbox" name="hobbies[]" value="Viajar" <?php if (in_array("Viajar", $hobbies)) echo "checked"; ?>> Viajar<br>
            <input type="checkbox" name="hobbies[]" value="Música" <?php if (in_array("Música", $hobbies)) echo "checked"; ?>> Música<br>
            <span style="color: red;"><?php echo $errors["hobbies"] ?? ""; ?></span>
        </fieldset>

        <!-- Países -->
        <fieldset>
            <legend>Selecciona tus Países Favoritos</legend>
            <select name="paises[]" multiple size="4">
                <option value="España" <?php if (in_array("España", $paises)) echo "selected"; ?>>España</option>
                <option value="México" <?php if (in_array("México", $paises)) echo "selected"; ?>>México</option>
                <option value="Japón" <?php if (in_array("Japón", $paises)) echo "selected"; ?>>Japón</option>
                <option value="Estados Unidos" <?php if (in_array("Estados Unidos", $paises)) echo "selected"; ?>>Estados Unidos</option>
                <option value="Canadá" <?php if (in_array("Canadá", $paises)) echo "selected"; ?>>Canadá</option>
            </select>
            <span style="color: red;"><?php echo $errors["paises"] ?? ""; ?></span>
        </fieldset>

        <br>
        <input type="submit" value="Enviar">
    </form>

    <!-- Resultados -->
    <?php
    if (!empty($resultados)) {
        echo "<h3>Resultados:</h3>";
        echo "<ul>";
        foreach ($resultados as $clave => $valor) {
            echo "<li><strong>$clave:</strong> $valor</li>";
        }
        echo "</ul>";
    }

    if (!empty($hobbies)) {
        echo "<h3>Hobbies seleccionados:</h3><ul>";
        foreach ($hobbies as $hobby) {
            echo "<li>" . htmlspecialchars($hobby) . "</li>";
        }
        echo "</ul>";
    }

    if (!empty($paises)) {
        echo "<h3>Países seleccionados:</h3><ul>";
        foreach ($paises as $pais) {
            echo "<li>" . htmlspecialchars($pais) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
