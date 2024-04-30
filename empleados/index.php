<?php
  $self = $_SERVER['PHP_SELF'];
  header("Refresh: 11600; URL='$self'");
  require_once("../conexion/conexion.php");
  $maquina1 = $conexion -> 	query('select * FROM temporal where id_maquina = "M1" and disponible="1"');
  $maquina2 = $conexion -> 	query('select * FROM temporal where id_maquina = "M2" and disponible="1"');
  $maquina3 = $conexion -> 	query('select * FROM temporal where id_maquina = "M3" and disponible="1"');
  $maquina4 = $conexion -> 	query('select * FROM temporal where id_maquina = "M4" and disponible="1"');
  $maquina5 = $conexion -> 	query('select * FROM temporal where id_maquina = "M5" and disponible="1"');
  $hoy = date("Y-m-d");
  $masSeisDias = date ('d-m-Y', strtotime ('+ 6 day', strtotime($hoy)));
  $masdoceDias = date ('d-m-Y', strtotime ('+ 12 day', strtotime($hoy)));
  $charolas = $conexion -> 	query("select * FROM charolas where disponible='0'");
  while($row2 = mysqli_fetch_array($charolas)){
    $disponible = $row2['fecha_disponible'];
    $id_charola = $row2['id_charola'];
    if($disponible < $hoy){
        $update = $conexion -> query("UPDATE charolas SET disponible = 1  where id_charola = '$id_charola'");
    }
  }
  while ($row = mysqli_fetch_array($maquina1)){
    $fe=$row['fecha_entrada'];
    $fs=$row['fecha_salida'];
    $fp=$row['fecha_proxima'];
    $id_entrada = $row['id_entrada'];
    if($fs = $hoy){
      $update = $conexion -> query("UPDATE temporal SET disponible = 0  where id_entrada = '$id_entrada'");
    }
  }
  while ($row = mysqli_fetch_array($maquina2)){
    $fe=$row['fecha_entrada'];
    $fs=$row['fecha_salida'];
    $fp=$row['fecha_proxima'];
    $id_entrada = $row['id_entrada'];
    if($fs < $hoy){
      $update = $conexion -> query("UPDATE temporal SET disponible = 0  where id_entrada = '$id_entrada'");
    }
  }
  while ($row = mysqli_fetch_array($maquina3)){
    $fe=$row['fecha_entrada'];
    $fs=$row['fecha_salida'];
    $fp=$row['fecha_proxima'];
    $id_entrada = $row['id_entrada'];
    if($fs < $hoy){
      $update = $conexion -> query("UPDATE temporal SET disponible = 0  where id_entrada = '$id_entrada'");
    }
  }
  while ($row = mysqli_fetch_array($maquina4)){
    $fe=$row['fecha_entrada'];
    $fs=$row['fecha_salida'];
    $fp=$row['fecha_proxima'];
    $id_entrada = $row['id_entrada'];
    if($fs < $hoy){
      $update = $conexion -> query("UPDATE temporal SET disponible = 0  where id_entrada = '$id_entrada'");
    }
  }
  while ($row = mysqli_fetch_array($maquina5)){
    $fe=$row['fecha_entrada'];
    $fs=$row['fecha_salida'];
    $fp=$row['fecha_proxima'];
    $id_entrada = $row['id_entrada'];
    if($fs < $hoy){
      $update = $conexion -> query("UPDATE temporal SET disponible = 0  where id_entrada = '$id_entrada'");
    }
  }
  $salida5 = $conexion -> query("SELECT * FROM temporal where disponible = '0'");
  $entrada5 = $conexion -> query("SELECT * FROM temporal where disponible = '0'");
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
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"></i> Salidad y Entradas de Cargas</h1>
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
                    <caption>Salidas</caption>
										<tr>
											<th class="text-center">Numero de Maquina</th>
											<th class="text-center">Charga inicial y Charola inicial</th>
                      <th class="text-center">Charga final y Charola final</th>
											<th class="text-center">Fecha de Salida</th>
										</tr>
									</thead>
									<tbody>
										<?php

												 while ($row = mysqli_fetch_array($salida5)){
                          $fecha_proxima=$row['fecha_proxima'];
                          $fecha_salida = $row['fecha_salida'];
                          if($fecha_proxima <= $hoy && $hoy<=$fecha_salida){
                            $id_carga=$row['id_carga'];
                            $id_maquina=$row['id_maquina'];
                            $id_charolai=$row['id_charolai'];
                            $charolaf=$row['charolaf'];
                            $arr0 = str_split($id_carga);
                            $arr1 = str_split($id_charolai);
                            $arr2 = str_split($charolaf);
                            $ch = 0;
                            if(is_numeric($arr1[3])){
                              $ch1 = implode($arr1[2],$arr1[3]);
                            }else{
                              $ch1 = $arr1[2]; //charola inicial
                            }
                            if(is_numeric($arr1[5])){
                              $cai1 = $arr1[5]; //Carga inicial
                            }else{
                              $cai1 = $arr1[4];
                            }
                            if(is_numeric($arr2[3])){
                              $chf1 = implode($arr2[2],$arr2[3]); //charola final
                            }else{
                              $chf1 = $arr2[2];
                            }
                            if(is_numeric($arr2[5])){
                              $caf1 = $arr2[5]; //Carga final
                            }else{
                              $caf1 = $arr2[4];
                            }
  													$fecha_entrada=$row['fecha_entrada'];


  										?>

													<tr>
  													<td><?php echo "<p style='color:#000000;'>Maquina ".$arr0[1]."</p>";?></td>
                            <td><?php echo "<p style='color:#000000;'>Carga ".$cai1." Charola ".$ch1."</p>";?></td>
  													<td><?php echo "<p style='color:#000000;'>Carga ".$caf1." Charola ".$chf1."</p>";?></td>
  													<td><?php echo "<p style='color:#e61919'><strong>".strftime(str_replace('-','/',"%A, %d de %B de %Y", $fecha_salida))."</strong></p>";?></td>
  												</tr>
  										<?php
                      }
										}
										?>
									</tbody>
								</table>
							</div>
              </br>
              </br>
              </br>
              <!-- Segunda tabla -->

              <div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
                    <caption>Entradas</caption>
											<th class="text-center">Numero de Maquina</th>
											<th class="text-center">Charga inicial y Charola inicial</th>
											<th class="text-center">Charga final y Charola final</th>
											<th class="text-center">Fecha de Entrada</th>
										</tr>
									</thead>
									<tbody>
										<?php

												while ($row1 = mysqli_fetch_array($entrada5)){
                          $fecha_entrada=$row1['fecha_entrada'];
                          $fecha_preentrada=$row1['fecha_preentrada'];
                          if($fecha_entrada >= $hoy ){
                            $id_carga=$row1['id_carga'];
                            $id_maquina=$row1['id_maquina'];
                            $id_charolai=$row1['id_charolai'];
                            $charolaf=$row1['charolaf'];
                            $arr4 = str_split($id_carga);
                            $arr5 = str_split($id_charolai);
                            $arr6 = str_split($charolaf);
                            $ch = 0;
                            if(is_numeric($arr5[3])){
                              $ch3 = implode($arr5[2],$arr5[3]);
                            }else{
                              $ch3 = $arr5[2]; //charola inicial
                            }
                            if(is_numeric($arr5[5])){
                              $cai2 = $arr5[5]; //Carga inicial
                            }else{
                              $cai2 = $arr5[4];
                            }
                            if(is_numeric($arr6[3])){
                              $chf2 = implode($arr6[2],$arr6[3]); //charola final
                            }else{
                              $chf2 = $arr6[2];
                            }
                            if(is_numeric($arr6[5])){
                              $caf2 = $arr6[5]; //Carga final
                            }else{
                              $caf2 = $arr6[4];
                            }
                            $fecha_salida = $row1['fecha_salida'];
                            setlocale(LC_TIME,"es_ES");
  										?>
  													<tr>
                            <td><?php echo "<p style='color:#000000;'>Maquina ".$arr4[1]."</p>";?></td>
  													<td><?php echo "<p style='color:#000000;'>Carga ".$cai2." Charola ".$ch3."</p>";?></td>
                            <td><?php echo "<p style='color:#000000;'>Carga ".$caf2." Charola ".$chf2."</p>";?></td>
  													<td><?php echo "<p style='color:#00722e'><strong>".strftime(str_replace('-','/',"%A, %d de %B de %Y", $fecha_entrada))."</strong></p>";?></td>
  													</tr>
  										<?php
                      }
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
</body>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
