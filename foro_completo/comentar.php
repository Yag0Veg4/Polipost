<?php

    session_start();
    require_once("../db/conexion.php");

    $comentario = $_POST['comentario'];
    $id_post = $_POST['id_post'];
    $id_usuario = $_SESSION['id'];
    $fecha = date('d/m/y');

    $sql = "INSERT INTO comentarios(id_post, id_usuario, fecha, comentario) VALUES ('$id_post', '$id_usuario', '$fecha', '$comentario')";
    $con->query($sql);

    header("Location: /foro_completo/foro_com.php?id=".$id_post);

?>