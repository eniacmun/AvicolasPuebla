<?php
    require '../conexion/conexion.php';
    $self = $_SERVER['PHP_SELF'];
    header("Refresh: 21600; URL='$self'");
	$huevos = $conexion -> 	query('select * FROM huevos');
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
		<?php include 'navbar.php'?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registros <small>Tipo de Huevos</small></h1>
			</div>

		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Tipo de Huevo</th>
											<th class="text-center">Tiempo de Incubación</th>
                      <th></th>
										</tr>
									</thead>
									<tbody>
										<?php

												while ($row = mysqli_fetch_array($huevos)){
													$id_huevo=$row['id_huevo'];
													$tipo=$row['tipo'];
													$t_incubacion =$row['t_incubacion'];

										?>
													<tr>
													<td><?php echo "<p style='color:#000000;'>".$id_huevo."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$tipo."</p>";?></td>
													<td><?php echo "<p style='color:#000000;'>".$t_incubacion."</p>";?></td>
                          <td><td><button type="button" class="btn btn-warning btn-lg active" data-toggle="modal" data-target="#altahuevo">Editar</button></td></td>
													</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>

					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->

  <!-- Alta Huevo-->
  <div class="portfolio-modal modal fade" id="altahuevo" tabindex="-1" role="dialog" aria-labelledby="altahuevo" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fas fa-times"></i></span>
              </button>
              <div class="modal-body text-center">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-8">
                              <form method="post" id="registrarh" name="registrar">
                                    <div class="control-group">
                                      <div class="form-group  controls mb-0 pb-2">
                                        <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre del Huevo" required="required" data-validation-required-message="Ingrese el nombre del Huevo." /></br>
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <div class="form-group  controls mb-0 pb-2">
                                        <input class="form-control" id="t_incubación" name="t_incubacion" type="text" placeholder="Tiempo de incubación del Huevo" required="required" data-validation-required-message="Ingrese el tiempo de Incubación del Huevo." /></br>
                                      </div>
                                    </div>
                                    <div id="success"></div>
                                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" value="registrar" name="registrar">Registrar</button></div>
                              </form>
                              <button class="btn btn-primary" data-dismiss="modal">
                                  <i class="fas fa-times fa-fw"></i>
                                  Close Window
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

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
