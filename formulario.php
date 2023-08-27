<?php include("conexion.php") ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="backgroundF">
    <div class="nav">
        <a href="index.html" class="ref">Pagina principal</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="formulario.php" class="ref">Formulario</a>
    </div>
    <div id="divFormP">
    <form method="get" target="_self" id="form">
        <div id="name" class="divForm"><label>Nombre:<input type="text" name="name" placeholder="Nombre"></label><br></div>
        <div id="mail" class="divForm"><label>Correo:<input type="mail" name="mail" placeholder="Correo"></label> <br></div>
        <div id="genre" class="divForm">Genero: <label><input type="radio" name="genre" value="hombre" checked>Hombre</label> <label><input type="radio" name="genre" value="mujer">Mujer</label><br></div>
        <div id="passwd" class="divForm"><label>Contraseña:<input type="password" name="passwd" placeholder="Contraseña"></label> <br></div>
        <div id="comment" class="divForm"> Comentario:<label><textarea name="textArea"></textarea></label> <br></div>
        <div id="city" class="divForm"> Ciudad:<label id="city"><select name="city">
            <option value="value1"> Guadalajara</option>
            <option value="value2"> Tlaquepaque</option>
            <option value="value3"> Zapopan</option>
            <option value="value1"> Tonalá</option>
        </select></label><br></div>
        <div id="hire" class="divForm"><label>Me interesa contratarte:<input type="checkbox" name="hire"></label> <br></div>
        <div id="submitBtn" class="divForm"><label><button type="submit" name="send"> Enviar</button></label></div>
    </form>
    </div>
    </div>
    <?php
    if($miConexion){
        $echo="Conexion exitosa";
    }else{
        $echo="Conexión fallida";
    }
    ?>
</body>
</html>