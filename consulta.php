<?php
    require 'conexion/conexion.php';
    $maquina1 = $conexion -> 	query('select * FROM entrada where id_maquina = "M1"');
    $maquina2 = $conexion -> 	query('select * FROM entrada where id_maquina = "M2"');
    $maquina3 = $conexion -> 	query('select * FROM entrada where id_maquina = "M3"');
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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
                      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="consulta.php">Incubadoras</a></li>
                      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/admin">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">

        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Incubadoras</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/incubadora1.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/incubadora2.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/incubadora3.jpg" alt="" />
                        </div>
                    </div>

                </div>
            </div>
        </section>


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
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                      <title>Incubadora 1</title>
                                                </head>
                                                <br>
                                                <body>

                                                    <table width="40%" border="1"  class="table">
                                                      <tr>
                                                        <td><b>Numero de Carga</td>
                                                        <td><b>Fecha de entarda</td>
                                                        <td><b>Fecha de salida</td>
                                                      </tr>
                                                <?php

                                                    while ($row = mysqli_fetch_array($maquina1)){
                                                      $id_carga=$row['id_carga'];
                                                      $arr1 = str_split($id_carga);
                                                      //$nombre_carga = $conexion -> 	query('select n_carga FROM cargas where id_carga = '$id_carga'');
                                                      //$equivalente=$row['equivalente'];
                                                      $fecha_entrada=$row['fecha_entrada'];
                                                      $fecha_salida = $row['fecha_salida'];

                                                ?>
                                                      <tr>
                                                      <td><?php echo "<p style='color:#000000;'>".$arr1[1]."</p>";?></td>
                                                      <td><?php echo "<p style='color:#000000'>".$fecha_entrada."</p>";?></td>
                                                      <td><?php echo "<p style='color:#000000'>".$fecha_salida."</p>";?></td>
                                											<td><a href="#!" class="btn btn-danger btn-raised btn-xs">Sacar</a></td>
                                                      </tr>
                                                <?php
                                                }


                                                ?>
                                                </table>
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
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                  <title>Incubadora 1</title>
                                            </head>
                                            <br>
                                            <body>

                                                <table width="40%" border="1" class="table">
                                                  <tr>
                                                    <td><b>Cantidad</td>
                                                    <td><b>Numero de Carga</td>
                                                    <td><b>Fecha de entarda</td>
                                                    <td><b>Fecha de salida</td>
                                                  </tr>
                                            <?php

                                                while ($row2 = mysqli_fetch_array($maquina2)){
                                                  $cantidad=$row2['cantidad'];
                                                  $id_carga=$row2['id_carga'];
                                                  $arr2 = str_split($id_carga);
                                                  //$equivalente=$row2['equivalente'];
                                                  $fecha_entrada=$row2['fecha_entrada'];
                                                  $fecha_salida = $row2['fecha_salida'];

                                            ?>
                                                  <tr>
                                                  <td><?php echo "<p style='color:#000000;'>".$cantidad."</p>";?></td>
                                                  <td><?php echo "<p style='color:#000000;'>".$arr2[1]."</p>";?></td>
                                                  <td><?php echo "<p style='color:#000000'>".$fecha_entrada."</p>";?></td>
                                                  <td><?php echo "<p style='color:#000000'>".$fecha_salida."</p>";?></td>
                                                  <td><a href="#!" class="btn btn-danger btn-raised btn-xs">Sacar</a></td>
                                                  </tr>
                                            <?php
                                            }


                                            ?>
                                            </table>
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
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                  <title>Incubadora 1</title>
                                            </head>
                                            <br>
                                            <body>

                                                <table width="40%" border="1" class="table">
                                                  <tr>
                                                    <td><b>Cantidad</td>
                                                    <td><b>Numero de Carga</td>
                                                    <td><b>Cantidad de Charolas por carga</td>
                                                    <td><b>Fecha de entarda</td>
                                                    <td><b>Fecha de salida</td>
                                                  </tr>
                                            <?php

                                                while ($row3 = mysqli_fetch_array($maquina3)){
                                                  $cantidad=$row3['cantidad'];
                                                  $id_carga=$row3['id_carga'];
                                                  $arr3 = str_split($id_carga);
                                                  //$equivalente=$row3['equivalente'];
                                                  $fecha_entrada=$row3['fecha_entrada'];
                                                  $fecha_salida = $row3['fecha_salida'];

                                            ?>
                                                  <tr>
                                                  <td><?php echo "<p style='color:#000000;'>".$cantidad."</p>";?></td>
                                                  <td><?php echo "<p style='color:#000000;'>".$arr3[1]."</p>";?></td>
                                                  <td><?php echo "<p style='color:#000000'>".$fecha_entrada."</p>";?></td>
                                                  <td><?php echo "<p style='color:#000000'>".$fecha_salida."</p>";?></td>
                                                  <td><a href="#!" class="btn btn-danger btn-raised btn-xs">Sacar</a></td>
                                                  </tr>
                                            <?php
                                            }


                                            ?>
                                            </table>
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
