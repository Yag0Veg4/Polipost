<?php
    session_start();
    require_once("../db/conexion.php");

    $id = $_SESSION['id'];
    $consulta = "SELECT * FROM post WHERE id_usuario='$id'";
    $res = $con->query($consulta);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Polipost</title>
        <link rel="stylesheet" href="foros_usuario.css">
        <link rel="stylesheet" href="../general/general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="shortcut icon" href="/image/logo.png" type="image/*">
    </head>
    <body>
        <header id="p-header">
            <nav id="nav-bar">
                <section id="logo">
                    <ul>
                        <li><a href="../index.php"><img src="../image/logo.png" alt="" id="img-logo"></a></li>
                        <li><a href="../index.php">P</a></li>
                        <li><a href="../index.php">O</a></li>
                        <li><a href="../index.php">L</a></li>
                        <li><a href="../index.php">I</a></li>
                        <li><a href="../index.php">P</a></li>
                        <li><a href="../index.php">O</a></li>
                        <li><a href="../index.php">S</a></li>
                        <li><a href="../index.php">T</a></li>
                    </ul>
                </section>
                <section id="menu-perfil">
                    <img src="/general/img_usuario.php?id=<?php echo $_SESSION['id'] ?>" id="imp">
                    <section id="opciones-menu">
                        <ul>
                            <li><a href="javascript:history.back()" id="RE">Regresar</a></li>
                            <li><a href="../foros_usuario/foros_usuario.php">Tus foros</a></li>
                            <li><a href="../foro/crear_foro.html">Crea tu foro</a></li>
                            <li><a href="../perfil_usuario/perfil-user.php">Perfil</a></li>
                            <li><a href="../login/logout.php">Salir</a></li>
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

                    <article class="glass">
                        <section class="tab1">
                            <section class="foro">
                                <section class="dat-usu">
                                    <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>" class="ami-user"><img src="/general/img_usuario.php?id=<?php echo $id_usuario ?>" class="img-fo"></a>
                                    <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>" class="nom-usu-f"><?php echo $nombre ?> <?php echo $apellido ?></a>
                                </section>
                                <section class="inf-foro">
                                    <p class="tit-foro-p"><?php echo $titulo ?></p>
                                    <p class="fecha-f"><?php echo $fecha ?></p> 
                                    <p class="contenido-f"><?php echo $contenido ?></p>
                                    <?php
                                        if($imagen != NULL){
                                    ?>
                                        <section>
                                            <img src="/general/img_foro.php?id=<?php echo $id ?>" class="img-foro-in">
                                        </section>
                                    <?php
                                        }
                                    ?>
                                </section>
                                <section class="nav-foro">
                                    <a class="btn-foro" href="../foro_completo/foro_com.php">Ir a foro</a>
                                </section>
                            </section>
                        </section>
                    </article>
                <?php
                    }
                ?>
            </article>
        </main>
        <footer>
        <article id="us">
            <section id="desc">
                <section class="subtitles">
                    <h4>QUIENES SOMOS</h4>
                </section>
                <section id="desc-p">
                    <p>Polipost es una red social en la cual podrás ver qué publican otros estudiantes, publicar cosas tú mismo y cosas así.</p>
                </section>
            </section>
            <section id="soporte">
                <section class="subtitles">
                    <h4>SOPORTE Y QUEJAS</h4>
                </section>
                <section id="sop-p">
                    <a href="mailto:polipostoficial@gmail.com" id="email">polipostoficial@gmail.com</a>
                </section>
            </section>
            <section id="contactos">
                <section class="subtitles">
                    <h4>NOSOTROS</h4><br>
                </section>
                <section id="redes-sociales">
                    <section class="sociales-f" id="facebook">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path></svg>
                        </a>
                    </section>
                    <section class="sociales-f" id="instagram">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="16" height="16" rx="4"></rect><circle cx="12" cy="12" r="3"></circle><line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line></svg>
                        </a>
                    </section>
                    <section class="sociales-f" id="whatsapp">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path><path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"></path></svg>
                        </a>
                    </section>
                    <section class="sociales-f" id="twitter">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path></svg>
                        </a>
                    </section>
                </section>
            </section>
        </article>
        <article>
            <section id="pp-team">
                <p>© 2022 Polipost, polipost team</p>
            </section>
        </article>
    </footer>
</body>
</html>