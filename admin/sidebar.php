<?php 
session_start();
$usuario = $_GET["usuario"];
$_SESSION['session_username'] = $usuario;

?>

<!-- SideBar -->
<section class="full-box cover dashboard-sideBar">
  <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
  <div class="full-box dashboard-sideBar-ct">
    <!--SideBar Title -->
    <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
      Avicolas - Puebla <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
    </div>
    <!-- SideBar User info -->
    <div class="full-box dashboard-sideBar-UserInfo">
      <figure class="full-box">
        <figure class="full-box">
					<figcaption class="text-center text-titles"><?php echo "Bienvenido ",$usuario; ?></figcaption>
				</figure>
      <ul class="full-box list-unstyled text-center">
        <li>
          <a href="#!" class="btn-exit-system">
            <i class="zmdi zmdi-power"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- SideBar Menu -->
    <ul class="list-unstyled full-box dashboard-sideBar-Menu">
      <li>
        <a href="home.php">
          <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
          <li>
            <a href="#"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Maquinas</a>
          </li>
          <li>
            <a href="registro.php?usuario=<?php echo $_SESSION['session_username'];?>"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Registros de cargas</a>
          </li>
          <li>
            <a href="huevos.php?usuario=<?php echo $_SESSION['session_username'];?>"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Huevos</a>
          </li>
        </ul>
      </li>
      <li>
      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Notas <i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
          <li>
            <a href="formas.php?usuario=<?php echo $_SESSION['session_username'];?>"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Notas</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#!" class="btn-sideBar-SubMenu">
          <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
        </a>
        <ul class="list-unstyled full-box">
          <li>
            <a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Perfil Actual</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>
