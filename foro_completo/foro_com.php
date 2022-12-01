<?php
    require_once("../db/conexion.php");
    session_start();

    $id = $_GET['id'];
    $consulta = "SELECT * FROM post WHERE id = '$id';";

    $res = $con->query($consulta);
    $row = $res->fetch_array();

    $titulo = $row['titulo'];
    $contenido = $row['contenido'];
    $imagen = $row['imagen'];
    $fecha = $row['fecha'];
    $id_usuario = $row['id_usuario'];

    $consulta2 = "SELECT nombre,apellido FROM usuario WHERE id='$id_usuario';";
    $res2 = $con->query($consulta2);
    $row2 = $res2->fetch_array();

    $nombre = $row2['nombre'];
    $apellido = $row2['apellido'];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polipost</title>
        <link rel="stylesheet" href="foro_com.css">
        <link rel="stylesheet" href="../general/general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="../general/general.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="shortcut icon" href="../image/logo.png" type="image/*">        
    </head>
    <body>
        <header>
            <nav id="nav-bar">
                <section id="logo">
                    <ul>
                    <li id="img-logo"><a href="../index.php"><img src="../image/logo.png" alt=""></a></li>
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
                    <a href="../perfil_usuario/perfil-user.php"><img src="/general/img_usuario.php?id=<?php echo $_SESSION['id'] ?>" id="imp"></a>
                    <section id="opciones-menu">
                        <ul>
                            <li><a href="javascript:history.back()" id="RE">Regresar</a></li>
                            <li><a href="../foros_usuario/foros_usuario.php">Tus foros</a></li>
                            <li><a href="../foro/crear_foro.html">Crea tu foro</a></li>
                            <li><a href="../perfil_usuario/perfil-user.php">Perfil</a></li>
                            <li><a href="../login/logout.php">Sailr</a></li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <main>
            <article class="inf-f">  
                <section class="foro">
                    <section class="usu-f">
                        <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>"><img src="/general/img_usuario.php?id=<?php echo $id_usuario ?>" id="peimg2"></a>
                        <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>"><?php echo $nombre ?> <?php echo $apellido ?></a>
                    </section>
                    <section class="inf-foro">
                        <h3 class="nom-foro"><?php echo $titulo ?></h3>
                        <p class="fecha"><?php echo $fecha ?></p>
                        <p class="desc-foro"><?php echo $contenido ?></p>
                    </section>
                    <section class="img-f">
                        <?php
                            if($imagen != NULL){
                        ?>
                        <img src="/general/img_foro.php?id=<?php echo $id ?>" class="img-foro">
                        <?php
                            }
                        ?>
                    </section>
                </section>
                <section class="comentarios">
                    <h1>COMENTARIOS:</h1>
                    <section class="com-form">
                        <form action="comentar.php" method="post">
                            <input type="textarea" name="comentario" id="comentario" placeholder="comentar" required maxlength="100">
                            <input type="hidden" name="id_post" value="<?php echo $id ?>">
                            <input type="submit" value="Comentar" id="btn-comentar">
                        </form>
                    </section>
                    <section class="com-usu">
                        <?php
                            $sql = "SELECT * FROM comentarios WHERE id_post = '$id' ORDER BY id DESC";
                            $res = $con->query($sql);


                            if($res->num_rows == 0){
                                echo '<p>No hay comentarios en este post</p>';
                            }

                            while($row = $res->fetch_array()){
                                $fecha = $row['fecha'];
                                $comentario = $row['comentario'];
                                $id_usuario = $row['id_usuario'];

                                $consulta2 = "SELECT nombre,apellido FROM usuario WHERE id='$id_usuario';";
                                $res2 = $con->query($consulta2);
                                $row2 = $res2->fetch_array();

                                $nombre = $row2['nombre'];
                                $apellido = $row2['apellido'];
                        ?>
                        <section class="com">
                            <section class="tr-com">
                                <section class="th-info-user">
                                    <section class="user">
                                        <a href=""><img src="/general/img_usuario.php?id="<?php echo $id_usuario ?> class="img-com"></a>
                                        <a href=""><p><?php echo $nombre ?> <?php echo $apellido ?></p></a>
                                    </section>
                                </section>
                                <section>
                                    <p class="fecha"><?php echo $fecha ?></p>
                                    <p class="txt-com"><?php echo $comentario ?></p>
                                </section>
                            </section>
                        </section>
                        <?php
                            }
                        ?>
                    </section>
                </section>
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