<?php
$host="localhost";
$bdd="mensajeria";
$usuario="root";
$contraseña="";

$var=mysql_connect($host,$usuario,$contraseña)or die(mysql_errno());
mysql_select_db($bdd) or die(mysql_error());


?>
