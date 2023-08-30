<?php

    $servername='localhost';
    $user='root';
    $password='';
    $database='formulario';

    try {
        $miConexion = new PDO("mysql:host=$servername;dbname=$database", $user, $password);
        // Set the PDO error mode to exception
        $miConexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Connected succesfully";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

    /*$miConexion=mysqli_connect(
        'localhost',
        'root',
        '',
        'formulario'
    );*/


?>
