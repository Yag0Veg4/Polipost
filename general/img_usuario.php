<?php
    require_once("../db/conexion.php");
    $id = $_GET['id'];

    $consulta = "SELECT imagen FROM usuario WHERE id='$id'";
    $res = $con->query($consulta);
    $img = $res->fetch_array()['imagen'];

    if($img != NULL){
        header("Content-type: image/jpg"); 
        echo($img);
    }else{
        header("Location: https://th.bing.com/th/id/OIP.Lpx9j83qR_cfQuaPHuvwWQHaHw?w=170&h=186&c=7&r=0&o=5&pid=1.7"); 
    }
?>