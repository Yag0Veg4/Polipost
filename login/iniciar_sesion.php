<?php
    require_once("../db/conexion.php");

    $codigo = $_POST['codigo'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM usuario WHERE codigo = '$codigo'";
    $res = mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_array($res);

    if($row){
        if(password_verify($password, $row['password'])){
            session_start();

            $_SESSION['logged'] = "Si";
            header("Location: /index.php");
        }else{
            echo "NO LOGIN";
        }
    }else{
        echo "ESE CODIGO NO ESTA REGISTRADO";
    }

    
?>