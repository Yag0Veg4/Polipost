<?php
    require_once("../db/conexion.php");
    $id = $_GET['id'];

    $consulta = "SELECT imagen FROM post WHERE id='$id'";
    $res = $con->query($consulta);
    $img = $res->fetch_array()['imagen'];

    if($img != NULL){
        header("Content-type: image/jpg"); 
        echo($img);
    }
?>