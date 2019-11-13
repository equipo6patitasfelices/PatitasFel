<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>PATITAS FELICES</title>
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
					<li><a href="Contactanos.html">Contactanos</a></li>
					<li><a href="index1.html">Servicios</a></li>
					<li><a href="login.php">Unete</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
<br><br><br><br>
<?php
	$nombre = $_POST["nombre"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$mail = $_POST["email"];
	$telefono = $_POST["telefono"];
	$asunto = $_POST["asunto"];
	$con = mysqli_connect('localhost', 'root','','patitas_felices');
	if ($con){
		echo "se establecio conexion";
	}else{
		echo "no se pudo conectar";
	}
	$sql = "INSERT INTO usuarios (nombre,apellido1,apellido2,mail,telefono,asunto) VALUES('$nombre','$apellido1','$apellido2','$mail','$telefono','$asunto')";
	
	$resultado = mysqli_query($con,$sql);
	if ($resultado) {
			echo "Formulario enviado. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		
		
	
	mysqli_close($con);
	echo("su nombre es: ". $nombre);
	echo("su apellido materno  es: ". $apellido1);
	echo("su apellido paterno es: ". $apellido2);
	echo("su email es: ". $mail);
	echo ("su numero de telefono es: ". $telefono);

	
?> 
<section class="limpia"></section>
<footer>
	<div>Todos los derechos reservados </div>
	<div>www.patitas felices.com</div>
</footer>



</body>




</html>


<div id="particles-js"></div>


	

