<?php
    require_once("../db/conexion.php");

    $codigo = $_POST['codigo'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM usuario WHERE codigo = '$codigo'";
    $res = mysqli_query($con, $consulta);
    $row = mysqli_fetch_array($res);

    if($row){
        if(password_verify($password, $row['password'])){
            session_start();

            $_SESSION['logged'] = "Si";
            $_SESSION['id'] = $row['id'];
            if((($row['carrera'] == '') || ($row['carrera'] == null)) || (($row['semestre'] == '') || ($row['semestre'] == null))){
                header("Location: /editar_perfil/editar perfil.php");
            }else{
                header("Location: ../index.php");
            }
        }else{
            header("Location: ../Alertas/Pass_inc.html");
        }
    }else{
        header("Location: ../Alertas/User_no_e.html");
    }

    
?>