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
<h4>Usuario o Password Incorrectos</h4>
<a href="index.php">VOLVER</a>

<?php
}else
{
	echo '<br> si existe';
}

?>


