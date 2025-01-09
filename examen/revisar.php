<?php
session_start();

// Cargar las preguntas desde la sesión
$preguntas = $_SESSION['preguntas'] ?? [];

// Respuestas enviadas
$respuestas = $_POST['respuesta'] ?? [];

// Inicializar contadores
$correctas = 0;
$incorrectas = 0;
$sinResponder = 0;

foreach ($preguntas as $index => $pregunta) {
    if (!isset($respuestas[$index])) {
        // Pregunta sin responder
        $sinResponder++;
        continue;
    }

    if ((int)$respuestas[$index] === $pregunta['correcta']) {
        // Respuesta correcta
        $correctas++;
    } else {
        // Respuesta incorrecta
        $incorrectas++;
    }
}

// Total de preguntas
$totalPreguntas = count($preguntas);

// Nota final
$notaFinal = $correctas - ($incorrectas * 0.33);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión del examen</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            padding: 20px;
            backdrop-filter: blur(10px);
        }
        h1, h2 {
            text-align: center;
            color: #00d1ff;
        }
        .question {
            margin-bottom: 20px;
        }
        .correcta {
            color: #00ff00;
            font-weight: bold;
        }
        .incorrecta {
            color: #ff0000;
            font-weight: bold;
        }
        p {
            font-size: 18px;
        }
        button {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: linear-gradient(135deg, #0072ff, #00c6ff);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Revisión del examen</h1>
        <?php foreach ($preguntas as $index => $pregunta): ?>
            <div class="question">
                <p><?= $pregunta['pregunta']; ?></p>
                <?php foreach ($pregunta['respuestas'] as $key => $respuesta): ?>
                    <span class="<?= $key === $pregunta['correcta'] ? 'correcta' : (isset($respuestas[$index]) && (int)$respuestas[$index] === $key ? 'incorrecta' : ''); ?>">
                        <?= $respuesta; ?>
                    </span><br>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <h2>Resultados</h2>
        <p>Preguntas correctas: <?= $correctas; ?></p>
        <p>Preguntas incorrectas: <?= $incorrectas; ?></p>
        <p>Preguntas sin responder: <?= $sinResponder; ?></p>
        <p>Nota final: <?= round($notaFinal, 2); ?></p>
        <form method="GET" action="index.php">
            <button type="submit">Volver a intentarlo</button>
        </form>
    </div>
</body>
</html>
