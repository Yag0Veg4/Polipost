<?php
    require_once("db/conexion.php");
    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: /login/in-sesion.html");
    }

    $consulta = "SELECT * FROM post ORDER BY id DESC";
    $res = $con->query($consulta);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Polipost</title>

        <!-- LINKS CSS -->
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="/general/general.css">

        <!-- LINKS PARA FUENTES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- IMAGEN ICONO -->
        <link rel="shortcut icon" href="../image/logo.png" type="image/*">
    </head>
    <body>
        <header id="p-header">
            <nav id="nav-bar">
                <section id="logo">
                    <ul>
                        <li id="img-logo"><a href=""><img src="../Polipost/image/logo.png" alt=""></a></li>
                        <li>P</li>
                        <li>O</li>
                        <li>L</li>
                        <li>I</li>
                        <li>P</li>
                        <li>O</li>
                        <li>S</li>
                        <li>T</li>
                    </ul>
                </section>
                <section id="barra-bus">
                    <form method="post" action="">
                        <input type="search" placeholder="A quien buscas?" class="bar-nav" id="busqueda" >
                        <input type="submit" value="Buscar" class="btn-nav">
                    </form>
                </section>
                <section id="menu-perfil">
                    <img src="/general/img_usuario.php?id=<?php echo $_SESSION['id'] ?>" id="imp">
                    <section id="opciones-menu">
                        <ul>
                            <li><a href="../foros_usuario/foros_usuario.php">Tus foros</a></li>
                            <li><a href="../Polipost/foro/crear_foro.html">Crea tu foro</a></li>
                            <li><a href="../perfil_usuario/perfil-user.php">Perfil</a></li>
                            <li><a href="../login/logout.php">Sailr</a></li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <main>
            <article id="con-se">
                <?php
                    while($fila = $res->fetch_array()) {
                        $id = $fila['id'];
                        $id_usuario = $fila['id_usuario'];
                        $titulo = $fila['titulo'];
                        $fecha = $fila['fecha'];
                        $contenido = $fila['contenido'];
                        $imagen = $fila['imagen'];

                        $consulta = "SELECT * FROM usuario WHERE id = '$id_usuario'";
                        $resultado = $con->query($consulta);
                        $usuario = $resultado->fetch_array();

                        $nombre = $usuario['nombre'];
                        $apellido = $usuario['apellido'];
                ?>
                    <article id="con-fo">
                        <section class="tab1">
                            <section class="con-foro">
                                <section class="dat-usu">
                                    <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>" class="img-usuario"><img src="/general/img_usuario.php?id=<?php echo $id_usuario ?>" class="img-fo"></a>
                                    <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id ?>" class="nom-usuario"> <?php echo $nombre.' '.$apellido ?></a>
                                </section>
                                <section class="inf-foro">
                                    <p class="tit-foro"><?php echo $titulo ?></p>
                                    <p class="fecha-foro"><?php echo $fecha ?></p>
                                    <p class="cont-foro"><?php echo $contenido ?></p>
                                    <?php
                                        if($imagen != NULL){
                                    ?>
                                    <img src="/general/img_foro.php?id=<?php echo $id ?>" class="img-foro">
                                    <?php
                                        }
                                    ?>
                                </section>
                                <section class="nav-foro">
                                    <a href="/foro_completo/foro_com.php?id=<?php echo $id ?>" class="btn-foro">Ir a foro</a>
                                </section>
                            </section>
                        </section>
                    </article>
                <?php
                    }
                ?>
            </article>
        </main>
        <script src="app.js"></script>
    </body>
</html>