<?php
    require_once("../db/conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $codigo = $_POST['codigo'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $pass_enc = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO usuario (nombre, apellido, codigo, telefono, correo, password) VALUES ('$nombre', '$apellido', '$codigo', '$telefono', '$correo', '$pass_enc')";

    $consulta = "SELECT * FROM usuario WHERE codigo = '$codigo'";
    $res_con = mysqli_query($con, $consulta);
    if(mysqli_affected_rows($con) > 0){
        header("Location: error.html");
    }else{
        if(mysqli_query($con, $insert)){
            header("Location: ../login/in-sesion.html");
        }else{
            echo mysqli_error($con);
        }
    }
?>