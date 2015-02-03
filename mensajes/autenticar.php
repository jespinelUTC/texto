
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<!-- importando estilos bootstrap-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<!-- importando funcionalidades de bootstrap-->
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<title>Menu de mensajes</title>
</head>
<body>


<?php
//PARA PODER ACCEDER A LA BDD
require_once('../conexion/conexion.php');
//echo "hola mundo"

//OBTENIENDO Y GUARDANDO EN VARIABLES LOS VALORES DE LA INTERFAZ
$nom=$_POST["txt_nombre"];
$pas=$_POST["txt_password"];


//echo "nombre es ".$nom." su pass es ".$pas;

//CONSULTA DE BUSQUEDA
$sentencia="select * from usuario where nombre='$nom' and password='$pas'";

//CONTANDO EL NUMERO DE FILAS QUE SE OBTIENE DE LA CONSULTA 

$resultado=mysql_num_rows(mysql_query($sentencia));


//SI ES IGUAL 0 SIGNIFICA QUE NO SE ENCONTRO USUARIOS CON ESE NOMBRE O CONTRASEÑA
if ($resultado==0){
	//echo "<br> no existe";
?>

<div class="container">
	<div class="row">
		<br>
	</div>

	<div class="row">
		<div class="col-lg-4">
		
		</div>
		<div class="col-lg-4">
			<div class="panel panel-info">
					
							<div class="panel-heading">
								<h4>Mensajes</h4>
							</div>
							<br><br>
							<center>
								<h4 style="color:red">Usuario o Password Incorrectos</h4>
								<a href="index.php" class="btn btn-primary">VOLVER</a>
							</center>
							<br><br><br><br>
		</div>
		
		</div>
		<div class="col-lg-4">
		
		</div>
	</div>	
</div>
		

<?php
}else
{
	//echo '<br> si existe';
	header("Location: menu.php");
}

?>


</body>
</html>