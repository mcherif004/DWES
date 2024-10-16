/* 3. Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas */

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        td:nth-child(1) {
            background-color: #ffeb3b;
        }
    </style>
</head>
<body>
    <h2>Tablas de Multiplicar del 1 al 10</h2>
    <table>
        <thead>
            <tr>
                <th>Tabla</th>
                <?php
                // Encabezado de la tabla para los números del 1 al 10
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Generar las filas con las tablas de multiplicar
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td><strong>$i</strong></td>"; // Columna de cabecera para cada tabla
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
