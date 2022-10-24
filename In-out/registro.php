<?php

    require_once('conexion.php');
    $NOMBRE=$_POST['NOMBRE'];
    $APELLIDO=$_POST['APELLIDO'];
    $CODIGO=$_POST['CODIGO'];
    $TELEFONO=$_POST['TELEFONO'];
    $CORREO=$_POST['CORREO'];

    $CONTRA=password_hash($_POST['CONTRA'],PASSWORD_DEFAULT,['cost'=>15]);

    

    $sql = "INSERT INTO registro(NOMBRE,APELLIDO,CODIGO,TELEFONO ,CORREO,CONTRASENA)values('$NOMBRE','$APELLIDO','$CODIGO','$TELEFONO','$CORREO','$CONTRA');";
  
    $paquete = mysqli_query($con,$sql);

    if(!$paquete){
        echo'no jalo';                
    }else{
        header('location: in-sesion.html');
        echo '<script>alert("Registrado")</script>';
    }
?>