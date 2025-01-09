<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form", method="GET", id = "formulario" target="">
        <!--Email-->
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <!--Cursos-->
        <label for="cursos">Cursos</label>
        <select name="cursos" id="cursos">
            <option selected disabled>Selecciona una opcion</option>
            <option value="ofi">Ofimatica (100€)</option>
            <option value="prog">Programacion (200€)</option>
            <option value="rep">Reparacion de ordenadores (150€)</option>
        </select>
        <br>
        <!--Clases-->
        <label for="clases">Nº de clases presenciales</label>
        <input type="text" name="clases" id="clases" minlength="1" maxlength="2" pattern="[5-9]|10">
        <br>
        <!--Desempleo-->
        <label for="checkbox">Situacion de desempleo</label>
        <input type="checkbox" name="checkbox" id="checkbox">
        <br>
        <!--Tarjeta de empleo-->
        <label for="tarjeta">Tarjeta de empleo</label>
        <input type="file" name="tarjeta" id="tarjeta">
    </form> 
</body>
</html>