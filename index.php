<?php
    $self = $_SERVER['PHP_SELF'];
    header("Refresh: 21600; URL='$self'");
    require 'conexion/conexion.php';
    $consulta = $conexion -> 	query('select * FROM maquina');
    $huevos = $conexion -> query('select * FROM huevos');

    if(isset($_POST['registrar'])){
  			$cantidad = $_POST['cantidad'];
        $cantidad2 = $_POST['cantidad'];
        $id_huevos = $_POST['lista4'];
        $id_huevos2 = $_POST['lista4'];
        $fecha_entrada = $_POST['fecha_entrada'];
        $fecha_preentrada = date("Y-m-d",strtotime('- 5 day', strtotime($fecha_entrada)));
        $equivalente = ceil($cantidad / 120);
        if($id_huevos = H1){
          $fecha_salida = date("Y-m-d",strtotime('+ 21 day', strtotime($fecha_entrada))); //gallina
        }elseif($id_huevos = H2){
          $fecha_salida = date("Y-m-d",strtotime('+ 25 day', strtotime($fecha_entrada))); //faisan
        }elseif($id_huevos = H3){
          $fecha_salida = date("Y-m-d",strtotime('+ 18 day', strtotime($fecha_entrada))); //Codorniz
        }elseif($id_huevos = H4){
          $fecha_salida = date("Y-m-d",strtotime('+ 28 day', strtotime($fecha_entrada))); //Guinea
        }elseif($id_huevos = H5){
          $fecha_salida = date("Y-m-d",strtotime('+ 21 day', strtotime($fecha_entrada))); //Habanera
        }elseif($id_huevos = H6){
          $fecha_salida = date("Y-m-d",strtotime('+ 28 day', strtotime($fecha_entrada))); //totola
        }elseif($id_huevos = H7){
          $fecha_salida = date("Y-m-d",strtotime('+ 28 day', strtotime($fecha_entrada))); //Pato
        }elseif($id_huevos = H8){
          $fecha_salida = date("Y-m-d",strtotime('+ 28 day', strtotime($fecha_entrada))); //Pavo real
        }elseif($id_huevos = H9){
          $fecha_salida = date("Y-m-d",strtotime('+ 21 day', strtotime($fecha_entrada))); //Pelea
        }elseif($id_huevos = H10){
          $fecha_salida = date("Y-m-d",strtotime('+ 24 day', strtotime($fecha_entrada))); //perdiz
        }elseif($id_huevos = H11){
          $fecha_salida = date("Y-m-d",strtotime('+ 21 day', strtotime($fecha_entrada)));//sedosa
        }elseif($id_huevos = H12){
          $fecha_salida = date("Y-m-d",strtotime('+ 32 day', strtotime($fecha_entrada)));//ganso
        }
        $fecha_salida2 = date("Y-m-d",strtotime('- 5 day', strtotime($fecha_salida)));
  			$id_maquina = $_POST['lista1'];
        $id_carga = $_POST['lista2'];
        $id_carga2 = $_POST['lista2'];
        $n_charola = $_POST['lista3'];
        $n_charola2 = $n_charola;
        $charola="CH".$n_charola;
        $id_charola2=$charola.$id_carga;
        //echo "$id_charola2";
        $charolas = $conexion -> query("select * FROM charolas where n_carga = '$id_carga'");
        $consulta = $conexion -> 	query('select * FROM maquina');
        $i = 0;
        $arr1 = str_split($id_carga);
        $arr2 = str_split($id_maquina);
        //$arr3 = str_split($id_charola);
        $total = $n_charola+$equivalente;
        $i=$n_charola;
        while($i<$total){
          $charola2="CH".$n_charola2;
          $id_charola=$charola2.$id_carga2;
          $update = $conexion -> query("UPDATE charolas SET disponible = 0, fecha_disponible='$fecha_salida2' WHERE id_charola = '$id_charola'");
          $n_charola2++;
          $i++;
          $carga = implode($arr1);
          if($n_charola>=60){
              $n_charola2 = 1;
              $arr1[3]++;
              $id_carga2 = implode($arr1);
          }
        }
        /*while($cantidad2>0) {
          while ($row = mysqli_fetch_array($charolas))
          {
            $capacidad = $row['capacidad'];
            $cantidad2 = $cantidad2-$capacidad;
            $update = $conexion -> query("UPDATE charolas SET disponible = 0 WHERE n_carga = '$arr1'");
            $i++;
            $arr1[1]++;
          }
          $arr1 = str_split($id_carga);
          if($cantidad2>0){
            while($cantidad2>0){
              $arr1[3]++;
              $arr2[3]++;
              $charolas2 = $conexion -> query("select capacidad FROM charolas where n_carga = '$arr2'");
              while ($row = mysqli_fetch_array($charolas2)){
                $update = $conexion -> query("UPDATE charolas SET disponible = 0 WHERE n_carga = '$arr1'");
                $capacidad = $row['capacidad'];
                $cantidad2 = $cantidad2-$capacidad;
                $arr1[1]++;
              }
            }
          }
        }*/
  			$insert = $conexion -> query("INSERT INTO entrada(id_entrada, cantidad, id_huevos, id_maquina,id_carga, id_charolai, charolaf, fecha_entrada, fecha_preentrada, fecha_salida, fecha_proxima, disponible) VALUES ('','$cantidad','$id_huevos2','$id_maquina','$id_carga','$id_charola2','$id_charola','$fecha_entrada','$fecha_preentrada','$fecha_salida','$fecha_salida2',0);");
        if (! $insert ) {
               return "Error no inserto, ";
          }
        $insert2 = $conexion -> query("INSERT INTO temporal(id_entrada, cantidad, id_huevos, id_maquina,id_carga, id_charolai, charolaf, fecha_entrada, fecha_preentrada, fecha_salida, fecha_proxima, disponible) VALUES ('','$cantidad','$id_huevos2','$id_maquina','$id_carga','$id_charola2','$id_charola','$fecha_entrada','$fecha_preentrada','$fecha_salida','$fecha_salida2',0);");
        if (! $insert2 ) {
               return "Error no inserto, ";
          }

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Avicolas - Puebla</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Avicolas Puebla</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Alta Huevo</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="empleados/">Incubadoras</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admin/index.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary ">
        </header>

      <!--Body -->
      <section></section>


       <body>
              <div id="formulario">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <form method="post" id="registrar" name="registrar">
                                <div class="control-group">
                                  <div class="form-group  controls mb-0 pb-2">
                                    <label>Cantidad de Huevos</label>
                                    <input class="form-control" id="cantidad" name="cantidad" type="text" placeholder="Cantidad de Huevos" required="required" data-validation-required-message="Ingrese cantidad a registrar." /></br>
                                  </div>
                                </div>

                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                      Selecciona un tipo de huevo<select class="form-control" id="lista4" name="lista4">

                                      <?php
                                          while ($row = mysqli_fetch_array($huevos))
                                          {
                                            ?>
                                              <option value="<?php echo $row['id_huevo']; ?>"><?php echo $row['tipo']; ?></option>
                                            <?php
                                          }
                                        ?>
                                      </select>
                                    </div>
                                  </div>
                                  <br/>
                                  <div class="control-group">
                                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                        Selecciona una maquina<select class="form-control" id="lista1" name="lista1">

                                        <?php
                                            while ($row = mysqli_fetch_array($consulta))
                                            {
                                              ?>
                                                <option value="<?php echo $row['id_maquina']; ?>"><?php echo $row['nombre']; ?></option>
                                              <?php
                                            }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <br/>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                          Selecciona una carga disponible<div id="select2lista"></div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="control-group">
                                      <div class="form-group  controls mb-0 pb-2">
                                        <label>Fecha de comienzo de incubación</label>
                                        <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada" type="text" placeholder="Fecha de entrada" required="required" data-validation-required-message="Ingrese cantidad a registrar." /></br>
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
       </body>

      <!-- Body -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('#lista1').val(1);
          recargarLista();

          $('#lista1').change(function(){
            recargarLista();
          });
        })
      </script>
      <script type="text/javascript">
        function recargarLista(){
          $.ajax({
            type:"POST",
            url:"datos.php",
            data:"maquina=" + $('#lista1').val(),
            success:function(r){
              $('#select2lista').html(r);
            }
          });
        }
      </script>



        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">E-Sys</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">E-Sys</h4>
                        <p class="lead mb-0">
                            Freelance, E-Sys
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © E-Sys 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
