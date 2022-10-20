//SCRIPT PHP 
<?php
    session_start();

    //CONDICION DE NO ACCESO SI NO SESION INICIADA
    if(!isset($_SESSION['loggedin'])) {
        header('location: index.html');

    }
?>

//CÓDIGO HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['name']?></h1>
    <a href="logout.php">Cerrar sesion</a>
</body>
</html>