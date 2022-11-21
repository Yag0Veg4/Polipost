<?php
    session_start();

    session_destroy();

    header('location: ../login/in-sesion.html');
    exit();
?>