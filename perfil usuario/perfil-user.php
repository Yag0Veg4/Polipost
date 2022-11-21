<!-- SCRIPT PHP -->
<?php
    session_start();


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Polipost</title>
    <link rel="stylesheet" href="perfil-user.css">
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
            <section id="nav">
                <a href="javascript:history.back()" id="RE">Regresar</a>
            </section>
        </nav>
    </header>
    <main>
        <article id="main">
            <article id="datos-usu">
                <section id="foto-perfil">
                    <img src="../image/Batman.jpg" id="img">
                </section>
                <section id="nom-usuario">
                    <h3>Yago Vega</h3>
                </section>
                <section id="info-y-redes">
                    <section id="contacto">
                        <p class="contactos">
                            <svg xmlns="http://www.w3.org/2000/svg" id="mail" class="icon icon-tabler icon-tabler-mail" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="3" y="5" width="18" height="14" rx="2"></rect><polyline points="3 7 12 13 21 7"></polyline></svg>
                            batiyago@gmail.com
                        </p>
                        <p class="contactos">
                            <svg xmlns="http://www.w3.org/2000/svg" id="tel" class="icon icon-tabler icon-tabler-phone" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path></svg>
                            3310663104
                        </p>
                        <p class="contactos">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" id="map" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="11" r="3"></circle>
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path></svg>
                            Tlaquepaque
                        </p>
                    </section>
                    <section id="redes-sociales">
                        <section class="sociales" id="facebook">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path></svg>
                            </a>
                        </section>
                        <section class="sociales" id="instagram">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="4" width="16" height="16" rx="4"></rect><circle cx="12" cy="12" r="3"></circle><line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line></svg>
                            </a>
                        </section>
                        <section class="sociales" id="twitter">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path></svg>
                            </a>
                        </section>
                    </section>
                    <section id="stats">
                        <section id="seguidores">
                            <h3>800</h3>
                            <p>SEGUIDORES</p>
                        </section>
                        <section id="publicaciones">
                            <h3>3</h3>
                            <p>PUBLICACIONES</p>
                        </section>
                        <section id="siguiendo">
                            <h3>12</h3>
                            <p>SIGUIENDO</p>
                        </section>
                    </section>
                </section>
            </article>
            <article id="info">
                <section id="info-user">
                    <section id="info-tit">
                        <h3>INFORMACIÓN PERSONAL</h3>
                    </section>
                    <section id="info-p">
                        <section id="sobre-mi">
                            <h5 class="sub-tit">Sobre mi:</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo nisi quibusdam in at? Quas dicta quod accusamus, dolorum illo fugit totam iste ab? Sed, earum pariatur necessitatibus illum rerum unde tempora recusandae numquam amet reprehenderit quibusdam voluptatem reiciendis molestias optio. Maiores placeat ullam corporis et ab debitis. Facere, earum distinctio.</p>
                        </section>
                        <section id="carrera">
                            <h5 class="sub-tit">Carrera:</h5>
                            <p>TPSI</p>
                        </section>
                        <section id="semestre">
                            <h5 class="sub-tit">Semestre:</h5>
                            <p>7</p>
                        </section>
                        <section id="sit-sent">
                            <h5 class="sub-tit">Situacion sentimental:</h5>
                            <p>En una relación</p>
                        </section>
                        <section id="pasatiempos">
                            <h5 class="sub-tit">Patiempo:</h5>
                            <p>Dibujar</p>
                        </section>
                        <section id="musica">
                            <h5 class="sub-tit">Musica:</h5>
                            <p>Rock</p>
                        </section>
                        <section id="apodo">
                            <h5 class="sub-tit">Apodo:</h5>
                            <p>Batiyago</p>
                        </section>
                        <section id="fecha-nac">
                            <h5 class="sub-tit">fecha de nacimiento:</h5>
                            <p>11/09/2004</p>
                        </section>
                    </section>
                    <section class="btn-act" id="ver-mas">
                        <a href="../MP/inf-user.html">Actualizar información</a>
                    </section>
                </section>
            </article>
            <article id="crear-publi">
                
            </article>
        </article>
    </main>
</body>
</html>