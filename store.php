<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
</head>
<body>
    
</body>
</html>

<?php require('conexion.php');?>

<?php
   if($miConexion){
if (isset($_POST['send'])){

    if(strlen($_POST['name']) >=1 && strlen($_POST['mail']) >= 1){
        $name=trim($_POST['name']);
        $mail=trim($_POST['mail']);
        $genre=trim($_POST['genre']);
        $passwd=trim($_POST['passwd']);
        $comment=trim($_POST['textArea']);
        $city=trim($_POST['city']);

        //if(isset($_POST['hire'])){
        //$hire=trim($_POST['hire']);
        //}

        //if(isset($hire)){ 
        //$consulta = "INSERT INTO information (name,mail,genre,password,comment,city) VALUES ('$name','$mail','$genre','$passwd','$comment','$city')";
        //}else{
        $consulta = "INSERT INTO information (name,mail,genre,password,comment,city) VALUES ('$name','$mail','$genre','$passwd','$comment','$city')";
        //}
        $miConexion->exec($consulta);

    }
    header("Location: formulario.php");
    }

}