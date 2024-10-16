/* 4. Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor 
hexadecimal que le corresponde. Cada celda será un enlace a una página que 
mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los 
conocimientos que tienes? */

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Colores</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Paleta de Colores</h1>
    <table>
        <tr>
            <th>Color</th>
            <th>Valor Hexadecimal</th>
            <th>Enlace</th>
        </tr>
        <?php
        $colores = [
            ['nombre' => 'Rojo', 'hex' => '#FF0000'],
            ['nombre' => 'Verde', 'hex' => '#00FF00'],
            ['nombre' => 'Azul', 'hex' => '#0000FF'],
            ['nombre' => 'Amarillo', 'hex' => '#FFFF00'],
            ['nombre' => 'Naranja', 'hex' => '#FFA500'],
            ['nombre' => 'Rosa', 'hex' => '#FFC0CB'],
            ['nombre' => 'Morado', 'hex' => '#800080'],
            ['nombre' => 'Negro', 'hex' => '#000000'],
            ['nombre' => 'Blanco', 'hex' => '#FFFFFF'],
        ];

        foreach ($colores as $color) {
            echo "<tr>
                    <td style='background-color: {$color['hex']};'>{$color['nombre']}</td>
                    <td>{$color['hex']}</td>
                    <td><a href='https://www.google.com/search?q={$color['nombre']}+background&tbm=isch' target='_blank'>Ver Fondo</a></td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>