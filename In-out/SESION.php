<?php

//iniciar la sesion y llamar a la conexion 
session_start();
require_once('conexion.php');

//Recuperacion de datos desde formulario html
$CODIGOE=$_POST ['usuario'];
$CONTRAE=$_POST ['pass'];
//sentencia sql para la busqueda de los datos especificos del usuario
$sql="SELECT CODIGO,CONTRASENA FROM registro WHERE CODIGO='$CODIGOE'";

//ejecutar la sentencia sql
$query=mysqli_query($con,$sql);

//Recuperacion  de los datos query
$RECUC=mysqli_fetch_array($query);
$hash=$RECUC['CONTRASENA'];

//comprobacion contraseña
if(password_verify($CONTRAE,$hash)){
    session_regenerate_id();
    $_SESSION['login']=TRUE;
    $_SESSION['name']=$CODIGOE;
    header('location: feedpolipost.php');
    echo mysqli_error($con);
} else{
    echo ('Todo Mal');       
    echo '<script>alert("Usurio o contraseña mal ingresados ingresa de nuevo por favor")</script>';

}
?>