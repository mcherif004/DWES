<?php
session_start();

// Cargar las preguntas
$preguntas = include('conf.php');

// Seleccionar 10 preguntas aleatorias
$preguntasAleatorias = array_rand($preguntas, 60);

// Guardar las preguntas seleccionadas en la sesión
$_SESSION['preguntas'] = array_intersect_key($preguntas, array_flip($preguntasAleatorias));

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Futurista</title>
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
        p {
            font-size: 18px;
        }
        .question {
            margin-bottom: 20px;
        }
        .question p {
            font-weight: bold;
            font-size: 20px;
        }
        .answers label {
            display: block;
            margin: 5px 0;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }
        .answers input {
            margin-right: 10px;
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
        <h1>TEST DE REPASO DESPLIEGUE</h1>
        <form method="POST" action="revisar.php">
            <?php foreach ($_SESSION['preguntas'] as $index => $pregunta): ?>
                <div class="question">
                    <p><?= $pregunta['pregunta']; ?></p>
                    <div class="answers">
                        <?php foreach ($pregunta['respuestas'] as $key => $respuesta): ?>
                            <label>
                                <input type="radio" name="respuesta[<?= $index; ?>]" value="<?= $key; ?>">
                                <?= $respuesta; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit">Finalizar</button>
        </form>
    </div>
</body>
</html>
