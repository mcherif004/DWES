<!--Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3 - Bucles</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <div>
    <table border="1">
        <thead>
            <tr>
            <?php 
            // Creo la cabecera de mi tabla
            echo "<th>X</th>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                for ($j = 1; $j <= 10; $j++) {
                    $mult = $i * $j;
                    echo "<td>$mult</td>";
                }
            }
            ?>
        </tbody>
    </table>
    </div>
    <br>
    <a href="./" type="button" id="boton">Volver atras</a>
</body>
</html>