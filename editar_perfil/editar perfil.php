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
    <link rel="stylesheet" href="editar perfil.css">
    <link rel="stylesheet" href="../general/general.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
                <img src="/general/img_usuario.php?id=<?php echo $_SESSION['id'] ?>" id="imp">
                <section id="opciones-menu">
                    <ul>
                        <li><a href="javascript:history.back()" id="RE">Regresar</a></li>
                        <li><a href="../foros_usuario/foros_usuario.php">Tus foros</a></li>
                        <li><a href="../foro/crear_foro.php">Crea tu foro</a></li>
                        <li><a href="../perfil_usuario/perfil-user.php">Perfil</a></li>
                        <li><a href="../login/logout.php">Salir</a></li>
                    </ul>
                </section>
            </section>
        </nav>
    </header>
    <main>
        <article id="glass">
            <section id="tit"> 
                <h1>EDITAR DATOS</h1>
            </section>
            <section id="formulario">
                <form action="editar_perfil1.php" method="post" enctype="multipart/form-data">
                    <section id="datos1">
                        <section id="carrera-form">
                            <label class="in-t-c" for="carrera"> Carrera </label> &nbsp;  
                            <select name="carrera" class="in-c" required>
                                <option>TPSI</option>
                                <option>TPQAPA</option>
                                <option>TPEI</option>
                                <option>TPMI</option>
                                <option>TPMF</option>
                                <option>TPP</option>
                                <option>TPPQI</option>
                                <option>BTDC</option>
                                <option>BTQCM</option>
                            </select> &nbsp; 
                        </section>
                        <section id="sem-form">
                            <label class="in-t-c" for="grado"> Semestre </label> &nbsp; 
                            <select name="semestre" required class="in-c">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                            </select>
                        </section>
                    </section>
                    <section id="datos2">
                        <section id="sit-sent-form">
                            <label class="in-t-c"> Situaci??n sentimental </label> &nbsp; 
                            <select name="situ_amor" id="Situacion" required class="in-c">
                                <option>Soltero(a)</option>
                                <option>En una relaci??n</option>
                                <option>En una relaci??n abierta</option>
                                <option>Es complicado</option>
                                <option>Casado(a)</option>
                                <option>Viudo(a)</option>
                            </select>
                        </section>
                    </section>
                    <section id="datos3">
                        <section id="musica-form">
                            <label class="in-t-c"> M??sica </label> &nbsp; 
                            <select name="musica" id="Musica" required class="in-c">
                                <option>M??sica clasica</option>
                                <option>Rockerito</option>
                                <option>Pop</option>
                                <option>Kpop</option>
                                <option>Banda (naco)</option>
                                <option>Jazz</option>
                                <option>Cumbia</option>
                                <option>Bachata</option>
                                <option>De todo un poquito</option>
                            </select>
                        </section>
                        <section id="pasatiempo-form">
                            <label class="in-t-c"> Pasatiempo favorito </label> &nbsp; 
                            <select name="pasatiempo" id="pasa" class="in-c" require>
                                <option>Dibujar</option>
                                <option>Hacer ejercicio</option>
                                <option>Tocar alg??n instrumento</option>
                                <option> Leer </option>
                                <option>Jugar videojuegos</option>
                                <option>Cantar</option>
                                <option>Tomar fotos</option>
                            </select>
                            <input type="text" name="otro" placeholder="OTRO" id="otro">
                        </section>
                        <section id="idk-form">
                            <label class="in-t"> Pelicula o serie favorita</label>
                            <input class="in" type="text" name="p_favorita" placeholder="Peli/serie favorita" require>
                            <label class="in-t"> Apodo (opcional)</label>
                            <input class="in" type="text" name="apodo" placeholder="Apodo">
                            <label class="in-t"> Escribe algunos datos sobre ti</label>
                            <input class="in" type="text" name="sobre_mi" placeholder="Datos sobre mi" id="sobre-ti" required>
                            <label class="in-t" for="direccion">Municipio en donde vives</label> 
                            <input class="in" type="text" name="municipio" name="dire" id="muni" placeholder="Municipio" required>
                            <label class="in-t" for="rs"> Tu fecha de nacimiento</label>
                            <input class="in" type="date" name="fecha_nac" required>
                        </section>
                        <section id="redes-sociales-form">
                            <label id="tit-rs" for="Redes sociales:">Redes sociales:</label>
                            <label class="in-t" for="Facebook">Ingresa el link de tu facebook (opcional)</label>
                            <input class="in" type="url" name="facebook" id="facebook-form" placeholder="Facebook">
                            <label class="in-t" for="Instagram">Ingresa el link de tu instagram (opcional)</label>
                            <input class="in" type="url" name="instagram" id="instagram-form" placeholder="Instagram">
                            <label class="in-t" for="Twitter">Ingresa el link de tu twitter (opcional)</label>
                            <input class="in" type="url" name="twitter" id="twitter-form" placeholder="Twitter">
                        </section>
                    </section>
                    <section id="datos4">
                        <label for="foto">Edita tu foto de perfil (opcional)</label>
                        <input type="file" name="imagen" id="foto-edi">
                    </section>
                    <section id="datos5">
                        <a onclick="javascript:history.back()" class="btn">Cancelar</a>
                        <input type="submit" value="Guardar" id="btn-guardar" class="btn">
                    </section>
                </form>
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
                    <p>Polipost es una red social en la cual podr??s ver qu?? publican otros estudiantes, publicar cosas t?? mismo y cosas as??.</p>
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
                <p>?? 2022 Polipost, polipost team</p>
            </section>
        </article>
    </footer>
</body>
</html>