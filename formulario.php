<!DOCTYPE html>
<?php require('conexion.php'); require('store.php');?>
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
        
    <form action="store.php" method="post" id="form">
        <div id="nameId" class="divForm"><label>Nombre:<input type="text" name="name" placeholder="Nombre"></label><br></div>
        <div id="mailId" class="divForm"><label>Correo:<input type="mail" name="mail" placeholder="Correo"></label> <br></div>
        <div id="genreId" class="divForm">Genero: <label><input type="radio" name="genre" value="hombre" checked>Hombre</label> <label><input type="radio" name="genre" value="mujer">Mujer</label><br></div>
        <div id="passwdId" class="divForm"><label>Contraseña:<input type="password" name="passwd" placeholder="Contraseña"></label> <br></div>
        <div id="comment" class="divForm"> Comentario:<label><textarea name="textArea"></textarea></label> <br></div>
        <div id="city" class="divForm"> Ciudad:<label id="city"><select name="city">
            <option value="value1"> Guadalajara</option>
            <option value="value2"> Tlaquepaque</option>
            <option value="value3"> Zapopan</option>
            <option value="value1"> Tonalá</option>
        </select></label><br></div>
        <!--<div id="hireId" class="divForm"><label>Me interesa contratarte:<input type="checkbox" name="hire"></label> <br></div>-->
        <div id="submit" class="divForm"><label><button type="submit" name="send"> Enviar</button></label></div>
    </form>
    </div>
    </div>
    
    <?php
    if($miConexion){
   
        /*if($resultado) {
            ?>
            <h3 class="ok"> Dato insertado correctamente </h3>
            <?php
        } else {
            ?>
            <h3 class="bad"> Dato no insertado </h3>
            sleep(1);
            <?php
        }*/
        $sql = "SELECT * FROM information";
            $stmt = $miConexion->prepare($sql);
            $stmt->execute();

            // Configura los resultados como un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            echo "<ul>";
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>" . $row['name'] . " - " . $row['mail'] . " " . $row['genre'] . "</li>";
            }
            echo "</ul>";
    } else { //Si no están vacíos los datos 
        ?>
        <h3 class="bad"> Por favor complete los campos </h3>
        <?php 
    }    


    ?>
    
</body>
</html>
