<!-- Script que muestre una lista de enlaces en función del perfil de usuario:
    Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
    Perfil Usuario: Pagina1, Pagina2 -->

<?php
$user_profile = 'user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        .code{
            margin-top: 50 px;
        }
    </style>
</head>
<body>
    <?php if ($user_profile == 'user'): ?>
    <p>Conected as user</p>
    <a href="#">Pagina 1</a>
    <a href="#">Pagina 2</a>
    <?php elseif ($user_profile == 'admin'): ?>
    <p>Conected as admin</p>
    <a href="#">Pagina 1</a>
    <a href="#">Pagina 2</a>
    <a href="#">Pagina 3</a>
    <a href="#">Pagina 4</a>
    <?php endif; ?>
</body>
</html>