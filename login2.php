<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="slider.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" type="text/css" href="secciones.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="redes.css">
    <link rel="stylesheet" type="text/css" href="css/fa-svg-with-js.css">
    <link rel="stylesheet"  href="js/fontawesome-all.min.js">
    <link rel="stylesheet" type="text/css" href="tabla.css">
    <link rel="stylesheet" href="sss/sss.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">

        
    </head>
    <body>
        
        <body>
    <div class="red">
        <a href="https://www.facebook.com/patitas.felices.3154" target="_blank">
            <div class="item red-facebook">
                <i class="fab fa-facebook-f fa-fw" style="color:#fff"></i>  
            </div>
        </a>

        <a href="https://www.youtube.com/channel/UCb1fcWzBuQ0ez-e5Ic_8Clw?view_as=subscriber" target="_blank">
            <div class="item red-youtube">
                <i class="fab fa-youtube fa-fw" style="color:#fff"></i> 
            </div>
        </a>

        <a href="https://twitter.com/PatitasFelices9" target="_blank">
            <div class="item red-twiter">
                <i class="fab fa-twitter fa-fw" style="color:#fff"></i> 
            </div>
        </a>

        

        <a href="https://www.instagram.com" target="_blank">
            <div class="item red-instagram">
                <i class="fab fa-instagram fa-fw" style="color:#fff"></i>   
            </div>
        </a>
    </div>
    <header>
        <div class="ancho">
            <div class="logo">
                <p><a href="index1.html">PATITAS FELICES</a></p>
            </div>
            <nav>
                <ul>
                    <li><a href="Catalogo.html">cachoros</a></li>
                    <li><a href="#conect">Contactanos</a></li>
                    <li><a href="index1.html">Servicios</a></li>
                    <li><a href="login.php">Unete</a></li>
                </ul>
            </nav>
        </div>
    </header>

    




<?php


        $user='root';
        $pass='1234';
        $form_user=$_POST['user'];
        $form_pass=$_POST['pass'];

        if ($user==$form_user) {
            if ($pass==$form_pass) {
                echo ("Te haz logeado correctamente");
                $mysqli = new mysqli('localhost','root','','patitas_felices');

                /* comprobar la conexión */
                if ($mysqli->connect_errno) {
                echo("Falló la conexión: %s\n". $mysqli->connect_error);
                exit();
                }

                        /*$query="SELECT * FROM usuarios";*/
                        if ($resultado = $mysqli->query("SELECT * FROM usuarios")) {
                    echo("Bienvenido admin");
                        }


echo "<table >
    <thead>
        <tr>
            <td>nombre</td>
            <td>apellido1</td>
            <td>apellido2</td>
                               <td>mail</td>
                               <td>telefono</td>
                               <td>asunto</td>
                               <td>empresa</td>
        </tr>
    </thead>
    <tbody>";
     while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>{$fila["nombre"]}</td>";
                            echo "<td>{$fila["apellido1"]}</td>";
                            echo "<td>{$fila["apellido2"]}</td>";
                            echo "<td>{$fila["mail"]}</td>";
                            echo "<td>{$fila["telefono"]}</td>";
                            echo "<td>{$fila["asunto"]}</td>";
                            echo "<td>{$fila["empresa"]}</td>";
                        echo "</tr>";
                        }
        
echo "</tbody>
</table>";
                       

            }else {
                echo "contraseña erronea";
            }
        }else {
            echo "El usuario es erroneo";

        }
        ?>


    </body>
    <footer>
    <div>Todos los derechos reservados </div>
    <div>www.patitas_felices.com</div>
    </footer>
</html>
