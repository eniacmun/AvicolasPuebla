<?php
    require '../conexion/conexion.php';
    $self = $_SERVER['PHP_SELF'];
    header("Refresh: 21600; URL='$self'");
    $maquina1 = $conexion -> 	query('select * FROM stock where id_maquina = "M1"');
    $maquina2 = $conexion -> 	query('select * FROM stock where id_maquina = "M2"');
    $maquina3 = $conexion -> 	query('select * FROM stock where id_maquina = "M3"');
?>


<!DOCTYPE html>
<html lang="es">
<head> 
	<title>Registro</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registros <small>Cargas</small></h1>
			</div>

		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Maquina 1</a></li>
					  	<li><a href="#maquina2" data-toggle="tab">Maquina 2</a></li>
							<li><a href="#maquina3" data-toggle="tab">Maquina 3</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#Cantidad</th>
											<th class="text-center">Numero de Cargas</th>
											<th class="text-center">Cantidad de Charolas por carga</th>
											<th class="text-center">Fecha de Entrada</th>
											<th class="text-center">Fecha de Salida</th>
										</tr>
									</thead>
									<tbody>
										<?php

												while ($row = mysqli_fetch_array($maquina1)){
													$cantidad=$row['cantidad'];
													$id_carga=$row['id_carga'];
													$arr1 = str_split($id_carga);
													//$nombre_carga = $conexion -> 	query('select n_carga FROM cargas where id_carga = '$id_carga'');
													$equivalente=$row['equivalente'];
													$fecha_entrada=$row['fecha_entrada'];
													$fecha_salida = $row['fecha_salida'];

										?>
													<tr>
													<td><?php echo "<p style='color:#000000;'>".$cantidad."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$arr1[1]."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$equivalente."</p>";?></td>
													<td><?php echo "<p style='color:#000000'>".$fecha_entrada."</p>";?></td>
													<td><?php echo "<p style='color:#000000'>".$fecha_salida."</p>";?></td>
													</tr>
										<?php
										}
										?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
						</div>
					  	<div class="tab-pane fade" id="maquina2">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#Cantidad</th>
											<th class="text-center">Numero de Cargas</th>
											<th class="text-center">Cantidad de Charolas por carga</th>
											<th class="text-center">Fecha de Entrada</th>
											<th class="text-center">Fecha de Salida</th>
										</tr>
									</thead>
									<tbody>
										<?php

												while ($row2 = mysqli_fetch_array($maquina2)){
													$cantidad=$row2['cantidad'];
													$id_carga=$row2['id_carga'];
													$arr2 = str_split($id_carga);
													//$nombre_carga = $conexion -> 	query('select n_carga FROM cargas where id_carga = '$id_carga'');
													$equivalente=$row2['equivalente'];
													$fecha_entrada=$row2['fecha_entrada'];
													$fecha_salida = $row2['fecha_salida'];

										?>
													<tr>
													<td><?php echo "<p style='color:#000000;'>".$cantidad."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$arr2[1]."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$equivalente."</p>";?></td>
													<td><?php echo "<p style='color:#000000'>".$fecha_entrada."</p>";?></td>
													<td><?php echo "<p style='color:#000000'>".$fecha_salida."</p>";?></td>
													</tr>
										<?php
										}
										?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>

							<div class="tab-pane fade" id="maquina3">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#Cantidad</th>
											<th class="text-center">Numero de Cargas</th>
											<th class="text-center">Cantidad de Charolas por carga</th>
											<th class="text-center">Fecha de Entrada</th>
											<th class="text-center">Fecha de Salida</th>
										</tr>
									</thead>
									<tbody>
										<?php

												while ($row3 = mysqli_fetch_array($maquina3)){
													$cantidad=$row3['cantidad'];
													$id_carga=$row3['id_carga'];
													$arr3 = str_split($id_carga);
													//$nombre_carga = $conexion -> 	query('select n_carga FROM cargas where id_carga = '$id_carga'');
													$equivalente=$row3['equivalente'];
													$fecha_entrada=$row3['fecha_entrada'];
													$fecha_salida = $row3['fecha_salida'];

										?>
													<tr>
													<td><?php echo "<p style='color:#000000;'>".$cantidad."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$arr3[1]."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$equivalente."</p>";?></td>
													<td><?php echo "<p style='color:#000000'>".$fecha_entrada."</p>";?></td>
													<td><?php echo "<p style='color:#000000'>".$fecha_salida."</p>";?></td>
													</tr>
										<?php
										}
										?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
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
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
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
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
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
