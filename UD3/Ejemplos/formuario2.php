<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $datos_personales = array(
        'Nombre' => htmlspecialchars($_GET['Mostafa']),
        'Apellidos' => htmlspecialchars($_GET['Cherif Mouaki'])
    );

    echo "<h2>Datos recibidos:</h2>";

    // Utilizamos un foreach para recorrer el array de datos
    foreach ($datos_personales as $clave => $valor) {
        echo "<p>$clave: $valor</p>";
    }
} else {
    echo "<p>Error: No se han enviado los datos correctamente.</p>";
}