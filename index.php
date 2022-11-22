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
        <link rel="shortcut icon" href="../Polipost/image/logo.png" type="image/*">
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
                        <button type="submit" class="btn-nav">Buscar</button>
                    </form>
                </section>
                <section id="foros">
                    <a href="../Polipost/foros_usuario/foros_usuario.html">Tus foros</a>
                    <a href="../Polipost/foro/crear_foro.html">Crea tu foro</a>
                </section>
                <section id="menu-perfil">
                    <img src="../Polipost/image/Batman.jpg" id="imp">
                    <section id="opciones-menu">
                        <ul>
                            <li><a href="../Polipost/perfil usuario/perfil-user.php">Perfil</a></li>
                            <li><a href="../Polipost/login/logout.php">Sailr</a></li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <main>
            <article id="as1"></article>
            <article id="con-se">
                <br>
                <?php
                    while($fila = $res->fetch_array()) {
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
                        <img src="" alt="">
                    </article>  
                    <br>

                <?php
                    }
                ?>

            </article>
            <article id="as2"></article>
        </main>
    </body>
</html>