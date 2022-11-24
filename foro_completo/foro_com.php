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
            <nav id="logo">
                <ul>
                    <li><a href="../index.php"><img src="../image/logo.png" alt=""></a></li>
                    <li><a href="../index.php">F</a></li>
                    <li><a href="../index.php">O</a></li>
                    <li><a href="../index.php">R</a></li>
                    <li><a href="../index.php">O</a></li> 
                    <li><a href="../index.php"></a></li>
                    <li><a href="../index.php">C</a></li>
                    <li><a href="../index.php">O</a></li>
                    <li><a href="../index.php">M</a></li>
                    <li><a href="../index.php">P</a></li>
                    <li><a href="../index.php">L</a></li>  
                    <li><a href="../index.php">E</a></li>
                    <li><a href="../index.php">T</a></li>
                    <li><a href="../index.php">O</a></li>                 
                </ul>                
            </nav>
            <section id="espacio"></section> 
            <nav id="regresar">
                <br>
                <br>
                <a href="javascript:history.back()" id="Regresar">Regresar</a>
            </nav>               
            <nav id="perfil">
                <a href="../perfil_usuario/perfil-user.html"><img src="../image/logo.png" id="peimg"></a>
            </nav>
        </header>  
        
        <main>
            <article id="info-foro">  
                <a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>"><img src="/general/img_usuario.php?id=<?php echo $id_usuario ?>" id="peimg2"></a>
                <br>  
                <br>            
                <p><a href="/Perfil_otro_usuario/PERFIL_A.php?id=<?php echo $id_usuario ?>"><?php echo $nombre ?> <?php echo $apellido ?></a><br><br> <?php echo $fecha ?> <br><br></p>  
                <h3><?php echo $titulo ?></h3>
                <p><?php echo $contenido ?></p>                                                    
                <br>
                <br>
                <?php
                    if($imagen != NULL){
                ?>

                <img src="/general/img_foro.php?id=<?php echo $id ?>" id="img-foro"></td>
                
                <?php
                    }
                ?>
                <br>
                <br>
                <label for="comentarios">Comentar:</label>
                <br>
                <br>
                <input type="text" name="comentario" id="comentario" placeholder="comentar">
                <br>                
                <button id="comentar">Comentar</button>
                <br>  
                <br>             
                <table>
                    <tr>
                        <td class="th-info-user">
                            <a href=""><img src="../image/logo.png" id="img-com"></a>
                            <a href=""><p>Yago Matteo Vega Sandoval</p></a>
                        </td>                        
                        <td>
                            <p>18/11/22</p>
                            <p>ra parte se la quedo su hermano los dos fueron ingresados a las cajas y mandados a diferentes planetas pero el mago encontró una de las cajas y elimino al hermano menor de Tapion es por eso que la otra parte del cuerpo de Gilligan estaba suelto entonces, después de esta historia Tapion no puede contener mas a Gilligan y sus dos partes se unen todos luchan pero son vencidos fácilmente, al final Goku se transforma y usa la técnica del puño del dragon derrotando a Gilligan.</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="th-info-user">
                            <a href=""><img src="../image/logo.png" id="img-com"></a>
                            <a href=""><p>Yago Matteo Vega Sandoval</p></a>
                        </td>                        
                        <td>
                            <p>18/11/22</p>
                            <p>ra parte se la quedo su hermano los dos fueron ingresados a las cajas y mandados a diferentes planetas pero el mago encontró una de las cajas y elimino al hermano menor de Tapion es por eso que la otra parte del cuerpo de Gilligan estaba suelto entonces, después de esta historia Tapion no puede contener mas a Gilligan y sus dos partes se unen todos luchan pero son vencidos fácilmente, al final Goku se transforma y usa la técnica del puño del dragon derrotando a Gilligan.</p>
                        </td>
                    </tr>
                </table>
            </article>
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
                        <a href="mailto:polipostoficial@gmail.com" id="email">polipostoficial@gmail.com</a>
                    </section>
                </section>
                <section id="contactos">
                    <section id="con-tit">
                        <h4>NOSOTROS</h4><br>
                    </section>
                    <section id="con-p">
                        <script src="https://kit.fontawesome.com/0a85d6b6f4.js" crossorigin="anonymous"></script>
                        <section id="social">
                            <a href="https://www.facebook.com/profile.php?id=100087426652577"><i class="fa-brands fa-facebook"></i><p>Facebook</p></a><br>
                            <a href="https://www.instagram.com/invites/contact/?i=lxq6eepq9ls7&utm_content=pv8zo7o"><i class="fa-brands fa-instagram"></i><p>Instagram</p></a><br>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i><p>Whatsapp</p></a><br>
                            <a href="https://twitter.com/polipostoficial?t=FVzRl3fwomEIG8aU8ulRNQ&s=08"><i class="fa-brands fa-twitter"></i><p>Twitter</p></a><br>
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