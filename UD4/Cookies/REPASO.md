## Repaso PHP

# Creacion de una cookie

```php
setcoockie = ("name", "value", expire);
// En cuanto a expire se pone time() seguido de un +/-, si se pone 0 seria una coockie de sesion
echo "Inicio <br/>"

if (isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
} else {
    echo "Cookie no encontrada";
}

echo "Fin <br/>"
```

# Borrar cookie

```php
if (isset($_COOKIE['c1'])){
    setcookie("name", "value", time()-60);
    echo "Cookie borrada";
}
```

# Formulario con login + contraseºa

```php
// Inicializamos las variables

//Variables user and password
$usuario = "";
$contrasena = "";

//Variables booleanas
$guardar = false;
$procesaFormualrio = false;

// Variables de error
$errorUsuario = "";
$errorContrasena = "";

// Comprobaciones

//Compruebo que se ha creado la cookie
if (isset($_POST['cUsuario'])) && (isset($_COOKIE['cContrasena'])) {
    $usuario = $_COOKIE['cUsuario'];
    $contrasena = $_COOKIE['cContrasena'];
}

//Compruebo que el formualio se ha enviado
if (isset($_POST['enviar'])) {
    $procesaFormulario = true;
}

//Si la comprobacion es True(Truthy) recogemos los datos
if ($procesaFormualario) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Compruebo que no haya ningun campo vacio
    if ($usuario == "") {
        $lprocesaFormulario = false;
        $errorUsuario = "Campo necesario";
    }
  
    if ($contrasena == "") {
        $lprocesaFormulario = false;
        $errorContrasena = "Campo necesario";
    }

    // Compruebo la casilla de checkbox(la cookie)
    if (isset($_POST['guardar'])) {
        $guardar = true;
        setcookie("cUsuario", $usuario, time()+3600);
        setcookie("cCookie", $cookie, time()+3600);
    } 
    else {
        setcookie("cUsuario", $usuario, time()-3600);
        setcookie("cContrasena", $contrasena, time()-3600);
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($procesaFormulario) {
        echo "Usuario: ". $usuario . "</br>Contraseña: " . $contraseña;
    }
    else {
    ?>
    <form action="" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" value="<?php echo $usuario ?>"/><?php echo $errorUsuario; ?><br/>
        <label>Contraseña:</label>
        <input type="text" name="contrasena" value="<?php echo $contrasena ?>"/><?php echo $errorContrasena; ?><br/>
        <input type="checkbox" name="guardar" <?php if ($guardar) echo "checked"?>>¿Quieres guardar los datos?
        <br/><button type="submit" name="enviar">Enviar</button>
    <?php
    }
    ?>
</body>
</html>
```

