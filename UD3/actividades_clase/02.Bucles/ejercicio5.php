<?php
/* 5. Dado el mes y año almacenados en variables, escribir un programa que muestre el 
calendario mensual correspondiente.  Marcar el día actual en verde y los festivos 
en rojo.*/

// Configurar el mes y año
$mes = 10; // Octubre
$anio = 2024;

// Días festivos
$festivos = [
    '10-12', // 12 de Octubre (Día de la Hispanidad)
    '10-31', // 31 de Octubre (Ejemplo de otro festivo)
];

// Obtener el día actual
$diaActual = date('j');
$mesActual = date('n');
$anioActual = date('Y');

// Obtener el primer día del mes
$primerDiaDelMes = mktime(0, 0, 0, $mes, 1, $anio);
$diasEnElMes = date('t', $primerDiaDelMes); // Cantidad de días en el mes
$diaSemana = date('N', $primerDiaDelMes); // Día de la semana en que inicia el mes (1 = lunes, 7 = domingo)

// Nombres de los días de la semana (comienza en lunes)
$diasSemana = ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'];

// Estilos para agrandar el calendario
echo '<style>
    table {
        width: 100%; 
        max-width: 800px; 
        margin: 20px auto;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #000;
        padding: 20px; /* Aumentar el padding para hacer las celdas más grandes */
        text-align: center;
        font-size: 20px; /* Aumentar el tamaño de la fuente */
    }
    th {
        background-color: #f2f2f2;
        font-size: 22px; /* Aumentar el tamaño de la fuente en los encabezados */
    }
    td {
        height: 100px; /* Aumentar la altura de las celdas */
    }
    td[style*="green"] {
        background-color: green;
        color: white;
    }
    td[style*="red"] {
        background-color: red;
        color: white;
    }
</style>';

echo '<table>';
echo '<tr>';
foreach ($diasSemana as $dia) {
    echo "<th>$dia</th>";
}
echo '</tr><tr>';

// Ajustar para que la semana comience en lunes (1 = lunes en lugar de 0 = domingo)
$diaSemana--; // Restamos 1 para alinear el lunes como primer día

// Rellenar los primeros días vacíos (si el mes no empieza en lunes)
for ($i = 0; $i < $diaSemana; $i++) {
    echo '<td></td>';
}

// Imprimir los días del mes
for ($dia = 1; $dia <= $diasEnElMes; $dia++) {
    $fechaActual = "$mes-$dia";

    // Marcar el día actual en verde
    if ($dia == $diaActual && $mes == $mesActual && $anio == $anioActual) {
        echo "<td style='background-color: green; color: white;'>$dia</td>";
    }
    // Marcar los festivos en rojo
    elseif (in_array($fechaActual, $festivos)) {
        echo "<td style='background-color: red; color: white;'>$dia</td>";
    } else {
        echo "<td>$dia</td>";
    }

    // Salto de línea al final de la semana (lunes a domingo)
    if (($diaSemana + $dia) % 7 == 0) {
        echo '</tr><tr>';
    }
}

echo '</tr>';
echo '</table>';
?>
