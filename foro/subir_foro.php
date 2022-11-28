<?php

    require_once("../db/conexion.php");
    session_start();

    $id = $_SESSION['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $fecha = date('d/m/y');

    if($img = $_FILES['imagen']['tmp_name']){
        $imagen = addslashes(file_get_contents($img));
        $sql = "INSERT INTO post(id_usuario, titulo, contenido, fecha, imagen) VALUES ('$id', '$titulo', '$contenido', '$fecha', '$imagen');";
    }else{
        $sql = "INSERT INTO post(id_usuario, titulo, contenido, fecha) VALUES ('$id', '$titulo', '$contenido', '$fecha');";
    }

    $con->query($sql);
    header("Location: /index.php");

    
?>