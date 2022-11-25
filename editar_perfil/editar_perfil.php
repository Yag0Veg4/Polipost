<?php
    require_once("../db/conexion.php");
    session_start();

    $id = $_SESSION['id'];

    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $situ_amor = $_POST['situ_amor'];
    $musica = $_POST['musica'];

    $pasatiempo = $_POST['pasatiempo'];
    $otro = $_POST['otro'];
    if($otro != "" && $otro != null){
        $pasatiempo = $otro;
    }

    $p_favorita = $_POST['p_favorita'];
    $apodo = $_POST['apodo'];
    $sobre_mi = $_POST['sobre_mi'];
    $municipio = $_POST['municipio'];
    $fecha_nac = $_POST['fecha_nac'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];

    if($img = $_FILES['imagen']['tmp_name']){
        $imagen = addslashes(file_get_contents($img));
    }else{
        $imagen = null;
    }

    $sql = "UPDATE usuario SET carrera = '$carrera', semestre = '$semestre', situ_amor = '$situ_amor', pasatiempo = '$pasatiempo', p_favorita = '$p_favorita', apodo = '$apodo', sobre_mi = '$sobre_mi', municipio = '$municipio', fecha_nac = '$fecha_nac', facebook = '$facebook', twitter='$twitter', instagram='$instagram', imagen = '$imagen'";
    $con->query($sql);

    header("Location: ../perfil_usuario/perfil-user.php");
    


?>