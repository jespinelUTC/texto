<?php
$host="localhost";
$bdd="mensajeria";
$usuario="root";
$contrase�a="";

$var=mysql_connect($host,$usuario,$contrase�a)or die(mysql_errno());
mysql_select_db($bdd) or die(mysql_error());


?>
