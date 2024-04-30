<?php
require_once("../conexion/conexion.php");

if(isset($_POST['login'])){
  if(!empty($_POST['UserName']) && !empty($_POST['UserName'])){
    $usuario = $_POST['UserName'];
    $contraseña = $_POST['UserPass'];
    $consulta = $conexion -> query('select * from administradores');
    while($row = $consulta->fetch_assoc()){
      $IdAdmin = $row['usuario'];
      $Pass = $row['contrasena'];
      if($usuario == $IdAdmin && $contraseña == $Pass){
        header("Location:home.php?usuario=$IdAdmin");
      }else{
        echo "Nombre del usuario o contraseña invalida";
      }
    }
  }else{
    echo "Deben llenarse todos los campos para ingresar en el sistema";
  }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="cover" style="background-image: url(./assets/img/loginFont.jpg);">
	<form action="#" method="post" autocomplete="off" class="full-box logInForm">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="usuario">Usuario</label>
		  <input class="form-control" name="UserName" id="UserName" type="text">
		  <p class="help-block">Escribe tu nombre de usuario</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" name="UserPass" id="UserPass" type="password">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger" name="login">
		</div>
	</form>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>
