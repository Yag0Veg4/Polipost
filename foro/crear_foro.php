<?php
    require_once("../db/conexion.php");
    session_start();  

    if(!isset($_SESSION['id'])){
        header("Location: /login/in-sesion.html");
    }


?>


<!DOCTYPE html>     
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polipost</title>
        <!-- LINKS -->
        <link rel="stylesheet" href="crear_foro.css">
        <link rel="stylesheet" href="../general/general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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
                    <img src="/general/img_usuario.php?id=<?php echo $_SESSION['id'] ?>" id="imp">
                    <section id="opciones-menu">
                        <ul>
                            <li><a href="javascript:history.back()" id="RE">Regresar</a></li>
                            <li><a href="../foros_usuario/foros_usuario.php">Tus foros</a></li>                            
                            <li><a href="../perfil_usuario/perfil-user.php">Perfil</a></li>
                            <li><a href="../login/logout.php">Salir</a></li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <main>
            <section id="glass">
                <h1 id="tit">CREAR FORO</h1>
                <form action="subir_foro.php" method="post" enctype="multipart/form-data">
                    <section class="nom-foro secc">
                        <label for="" class="sub-tit">Ingresa el nombre de tu foro</label><br>
                        <input type="text" name="titulo" placeholder="Titulo" required class="inp">
                    </section>
                    <section class="tema-foro secc">
                        <label for="" class="sub-tit">Describe el tema del que será acerca el foro</label><br>
                        <p><textarea name="contenido" id="inp-desc" placeholder="Describe tu foro"></textarea></p>
                    </section>
                    <section class="img-foro secc">
                        <label for="imagen" class="sub-tit">Agrega una imagen para el foro(opcional)</label>
                        <input type="file" name="imagen" id="select-foto">
                    </section>
                    <section class="btns">
                        <a onclick="javascript:history.back()" class="btn ac">Cancelar</a>
                        <input type="submit" name="Publicar" class="btn" value="Publicar">
                    </section>
                </form>
            </section>
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
                            <a href="https://www.facebook.com/profile.php?id=100087426652577">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path></svg>
                            </a>
                        </section>
                        <section class="sociales-f" id="instagram">
                            <a href="https://www.instagram.com/invites/contact/?i=lxq6eepq9ls7&utm_content=pv8zo7o">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="16" height="16" rx="4"></rect><circle cx="12" cy="12" r="3"></circle><line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line></svg>
                            </a>
                        </section>
                        <section class="sociales-f" id="twitter">
                            <a href="https://twitter.com/polipostoficial?t=FVzRl3fwomEIG8aU8ulRNQ&s=08">
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