<?php
	session_start();
?>
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
								<?php
									echo "<br>". $_SESSION['idConectado'];
									echo "<br>". $_SESSION['nombreConectado'];
								?>
							</div>
							
							<form action="autenticar.php" method="POST">	
							
								<div class="panel-body">
								
								<center>
								
									<div class="form-group">
											<div class="col-md-12">
												<a href="escribir.php" class="col-md-12 btn btn-success">Escribir Mensaje</a>
											</div>
									</div>	
									<br><br>
									<div class="form-group">
											
											
												<a href="#" class="btn btn-warning col-md-12">Bandeja de Entrada</a>
											
											
									</div>
									
									<br><br>
									<div class="form-group">
											
											<div class="col-md-12">
												<a href="#" class="col-md-12 btn btn-info">Bandeja de Salida</a>
											</div>
											
									</div>
								</center>
															
							</div>
					</div>
		</div>
		
		
		<div class="col-lg-4">
		
		</div>
	
	</div>






</div>

</body>
</html>
