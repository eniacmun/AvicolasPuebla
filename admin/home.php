<?php
require_once("../conexion/conexion.php");
$maquina1 = $conexion -> 	query("select * FROM stock where id_maquina = 'M1'");
$maquina2 = $conexion -> 	query('select * FROM stock where id_maquina = "M2"');
$maquina3 = $conexion -> 	query('select * FROM stock where id_maquina = "M3"');

$cantidad1 = '0';
$cantidad2 = '0';
$cantidad3 = '0';
while ($row = mysqli_fetch_array($maquina1)){
		$cantidad1 = $cantidad1 +1;
}

while ($row2 = mysqli_fetch_array($maquina2)){
		$cantidad2 = $cantidad2 +1;
}

while ($row3 = mysqli_fetch_array($maquina3)){
		$cantidad3 = $cantidad3 +1;
}
$usuario = $_GET["usuario"];
$_SESSION['session_username'] = $usuario;
if (isset($_SESSION['session_username'])){
	$cliente = $_SESSION['session_username'];
}else{
	header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
	die() ;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>

<?php include 'sidebar.php'?>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">General <small> resultados</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Maquina 1
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-swap"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo "$cantidad1";?></p>
					<small>Cargas en uso</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Maquina 2
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-swap"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo "$cantidad2";?></p>
					<small>Cargas en uso</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Maquina 2
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-swap"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo "$cantidad3";?></p>
					<small>Cargas en uso</small>
				</div>
			</article>
		</div>

	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  				</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Actualizaciones sobre la aplicación
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>
