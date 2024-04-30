<?php
    require '../conexion/conexion.php';
    $self = $_SERVER['PHP_SELF'];
    header("Refresh: 21600; URL='$self'");
    $usuario = $_GET["usuario"];
    $_SESSION['session_username'] = $usuario;
    if (isset($_SESSION['session_username'])){
      $cliente = $_SESSION['session_username'];
    }else{
      header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
      die() ;
    }

    if(isset($_POST['registrar'])){
  			$folio = $_POST['folio'];
        $cliente = $_POST['cliente'];
        $no_cliente = $_POST['no_cliente'];
        $telefono = $_POST['telefono'];
        $recibido = $_POST['fecha_recibido'];
        $entrega = $_POST['fecha_entrega'];
        $vacunado = $_POST['vacunado'];
        if($vacunado != "si"){
          $vacunado = "no";
        }
        $sexado = $_POST['sex'];
        if($sexado != "si"){
          $sexado = "no";
        }
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $E = $_POST['E'];
        $F = $_POST['F'];
        $codorniz = $_POST['codorniz'];
  			$faisan = $_POST['faisann'];
        $gallina = $_POST['gallina'];
        $guinea = $_POST['guinea'];
        $habanera = $_POST['habanera'];
        $totola = $_POST['totola'];
        $pato=$_POST['pato'];
        $pavoreal=$_POST['pavoreal'];
        $pelea = $_POST['pelea'];
        $perdiz = $_POST['perdiz'];
        $sedosa = $_POST['sedosa'];
        $total_huevos = $_POST['total'];
        $total_pagar = $_POST['total_pago'];
        $id_registros = $folio.$entrega;

  			$insert = $conexion -> query("INSERT INTO formas(folio,no_cliente,cliente,telefono,recibido,entrega,vacunado,sexado,id_registros,total_huevos,total_pagar) VALUES ('$folio','$no_cliente', '$cliente','$telefono', '$recibido', '$entrega', '$vacunado', '$sexado', '$id_registros','$total_huevos', '$total_pagar');");
        if (! $insert ) {
               return "Error no inserto, ";
          }
        $insert2 = $conexion -> query("INSERT INTO venta_huevos(id_registros,codorniz,faisan,gallina,habanera,totola,pato,pavoreal,pelea,perdiz,sedosa) VALUES ('$id_registros','$codorniz','$faisan','$gallina','$habanera','$totola','$pato','$pavoreal','$pelea','$perdiz','$sedosa');");
        $insert3 = $conexion -> query("INSERT INTO vacunas(id_registros,A,B,C,D,E,F) VALUES ('$id_registros','$A','$B','$C','$D','$E','$F');");

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
  <section class="full-box dashboard-contentPage">
		<!-- NavBar -->
    <?php include 'navbar.php'?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Registros <small>Notas

		</div>
       <div id="formulario">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8 mx-auto">
                   <form method="post" id="registrarh" name="registrar">
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Numero de Folio</label>
                         <input class="form-control" id="folio" name="folio" type="text" placeholder="Numero de Ruta" required="required" data-validation-required-message="Ingrese Numero de Ruta." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Nombre de Cliente</label>
                         <input class="form-control" id="cliente" name="cliente" type="text" placeholder="Nombre de Ruta" required="required" data-validation-required-message="Ingrese Numero de Ruta." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Numero de Cliente</label>
                         <input class="form-control" id="no_cliente" name="no_cliente" type="text" placeholder="Numero de Ruta" required="required" data-validation-required-message="Ingrese Numero de Ruta." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Telefono del Cliente</label>
                         <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Numero de telefono" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Recibido</label>
                         <input type="date" class="form-control" id="fecha_recibido" name="fecha_recibido" type="text" placeholder="Fecha de recibido" required="required" data-validation-required-message="Ingrese cantidad a registrar." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Entrega</label>
                         <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" type="text" placeholder="Fecha de entrega" required="required" data-validation-required-message="Ingrese cantidad a registrar." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Numero de Ruta</label>
                         <input class="form-control" id="no_ruta" name="no_ruta" type="text" placeholder="Numero de Ruta" required="required" data-validation-required-message="Ingrese Numero de Ruta." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Vacunado</label>
                         <input class="form-check-input" id="vacunado" name="vacunado" type="radio" placeholder="Nombre del Huevo" value="si" data-validation-required-message="Ingrese el nombre del Huevo." /> <label for="vacunado"> Si</label>
                         <input class="form-check-input" id="vacunado" name="vacunado" type="radio" placeholder="Nombre del Huevo" value="no" data-validation-required-message="Ingrese el nombre del Huevo." /> <label for="vacunado"> No</label><br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Pollo Sexado</label>
                         <input class="form-check-input" id="sex" name="sex" type="radio" placeholder="Pollo Sexado" value="si" data-validation-required-message="Ingrese el nombre del Huevo." /> <label for="vacunado">Si</label>
                         <input class="form-check-input" id="sex" name="sex" type="radio" placeholder="Pollo Sexado" value="no" data-validation-required-message="Ingrese el nombre del Huevo." /> <label for="vacunado">No</label><br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">A</label>
                         <input class="form-control" id="A" name="A" type="text" placeholder="Total de huevos"  />
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">B</label>
                         <input class="form-control" id="B" name="B" type="text" placeholder="Total de huevos"  />
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">C</label>
                         <input class="form-control" id="C" name="C" type="text" placeholder="Total de huevos" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">D</label>
                         <input class="form-control" id="D" name="D" type="text" placeholder="Total de huevos" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">E</label>
                         <input class="form-control" id="E" name="E" type="F" placeholder="Total de huevos"/></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">F</label>
                         <input class="form-control" id="F" name="F" type="text" placeholder="Total de huevos"  /></br>
                       </div>
                     </div>

                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                         <label style="color:#180704">Total de Huevos</label>
                         <input class="form-control" id="total" name="total" type="text" placeholder="Total de huevos" required="required" data-validation-required-message="Ingrese Numero de Ruta." /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Codorniz</label>
                         <input class="form-control" id="codorniz" name="codorniz" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Faisan</label>
                         <input class="form-control" id="faisann" name="faisann" type="number" placeholder=""  /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Gallina</label>
                         <input class="form-control" id="gallina" name="gallina" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Guinea</label>
                         <input class="form-control" id="guinea" name="guinea" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Habanera</label>
                         <input class="form-control" id="habanera" name="habanera" type="number" placeholder=""  /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Totola</label>
                         <input class="form-control" id="totola" name="totola" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Pato</label>
                         <input class="form-control" id="pato" name="pato" type="number" placeholder=""  /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Pavo Real</label>
                         <input class="form-control" id="pavoreal" name="pavoreal" type="number" placeholder=""/></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Pelea</label>
                         <input class="form-control" id="pelea" name="pelea" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Perdiz</label>
                         <input class="form-control" id="perdiz" name="perdiz" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Huevos de Sedosa</label>
                         <input class="form-control" id="sedosa" name="sedosa" type="number" placeholder="" /></br>
                       </div>
                     </div>
                     <div class="control-group">
                       <div class="form-group  controls mb-0 pb-2">
                        <label style="color:#180704">Total a Pagar</label>
                         <input class="form-control" id="total_pago" name="total_pago" type="number" placeholder /></br>
                       </div>
                     </div>
                     <div id="success"></div>
                     <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" value="registrar" name="registrar">Registrar</button></div>
                   </form>
                 </div>
               </div>
             </div>
       </div>
       <div id="exito" style="display:none">
           Sus datos han sido recibidos con éxito.
       </div>
       <div id="fracaso" style="display:none">
           Se ha producido un error durante el envío de datos.
       </div>

     </section>
</body>

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
