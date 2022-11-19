<?php
    require_once("db/conexion.php");

    $consulta = "SELECT * FROM post";
    $res = $con->query($consulta);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Polipost</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="/general/general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="shortcut icon" href="/image/logo.png" type="image/*">
    </head>
    <body>
        <header id="p-header">
                <nav id="logo">
                    <ul>
                        <li><a href="in-sesion.html"><img src="../image/logo.png" alt=""></a></li>
                        <li>P</li>
                        <li>O</li>
                        <li>L</li>
                        <li>I</li>
                        <li>P</li>
                        <li>O</li>
                        <li>S</li>
                        <li>T</li>
                    </ul>
                </nav>
                <nav id="barra-bus">
                    <input type="search" name="busqueda" id="busqueda" placeholder="¿Que foro buscas?"> 
                </nav>
                <section id="espacio">
                </section>
                <nav id="foro">
                    <a href="" class="fo">Tus foros</a>
                </nav>
                <nav id="cre-foro">
                    <a href="" class="fo">Crea tus foros</a>
                </nav>
                <nav id="perfil">
                    <a href=""><img src="../image/logo.png" alt="" id="imp"></a>
                </nav>
        </header>
        <main>
            <article id="as1"></article>
            <article id="con-se">
                <br>
                <?php
                    while($fila = $res->fetch_array()){
                        $id = $fila['id'];
                        $id_usuario = $fila['id_usuario'];
                        $titulo = $fila['titulo'];
                        $contenido = $fila['contenido'];
                        $imagen = $fila['imagen'];

                        $consulta = "SELECT * FROM usuario WHERE id = '$id_usuario'";
                        $resultado = $con->query($consulta);
                        $usuario = $resultado->fetch_array();

                        $nombre = $usuario['nombre'];
                        $apellido = $usuario['apellido'];
                ?>

                    <article id="con-fo">
                        <table class="tab1">
                            <tr class="">
                                <td class="dat-usu">
                                    <a href=""><img src="/general/img_usuario.php?id=<?php echo $id_usuario ?>" class="img-fo"></a>
                                    <br>
                                    <a href=""> <p class=""><?php echo $nombre.' '.$apellido ?></p></a>                                   
                                </td>                      
                                <td class="inf-foro">
                                    <p><?php echo $titulo ?></p>
                                    <br>
                                    <p><?php echo $contenido ?></p>
                                </td>
                                <td class="nav-foro">
                                    <button>Ir a foro</button>
                                </td>                          
                            </tr>                    
                        </table>  
                    </article>  
                    <br>

                <?php
                    }
                ?>

            </article>
            <article id="as2"></article>
        </main>
        <footer>
            <article id="us">
                <section id="desc">
                    <section id="desc-tit">
                        <h4>QUIENES SOMOS</h4>
                    </section>
                    <section id="desc-p">
                        <p>Polipost es una red social en la cual podrás ver qué publican otros estudiantes, publicar cosas tú mismo y cosas así.</p>
                    </section>
                </section>
                <section id="soporte">
                    <section id="sop-tit">
                        <h4>SOPORTE Y QUEJAS</h4>
                    </section>
                    <section id="sop-p">
                        <p>correoequis@gmail.com</p>
                    </section>
                </section>
                <section id="contactos">
                    <section id="con-tit">
                        <h4>NOSOTROS</h4><br>
                    </section>
                    <section id="con-p">
                        <script src="https://kit.fontawesome.com/0a85d6b6f4.js" crossorigin="anonymous"></script>
                        <section id="social">
                            <a href="#"><i class="fa-brands fa-facebook"></i><p>Facebook</p></a><br>
                            <a href="#"><i class="fa-brands fa-instagram"></i><p>Instagram</p></a><br>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i><p>Whatsapp</p></a><br>
                            <a href="#"><i class="fa-brands fa-twitter"></i><p>Twitter</p></a><br>
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