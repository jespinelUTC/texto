<?php
$host="localhost";
$bdd="mensajeria";
$usuario="root";
$contraseņa="";

$var=mysql_connect($host,$usuario,$contraseņa)or die(mysql_errno());
mysql_select_db($bdd) or die(mysql_error());


?>
