<?php
    //Activar la sesion
    session_start();

    //Remover la sesion
    session_unset();

    //DESTRUIR SESION 
    session_destroy();

    header('location: in-sesion.html');
?>