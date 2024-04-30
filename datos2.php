<?php
require 'conexion/conexion.php';
$carga=$_POST['carga'];

	//$sql="SELECT * from t_mundo  where id_continente='$continente'";
	//$consulta2 = $conexion -> query('select * FROM cargas where disponible = 1 and id_maquina = '$maquina'')
	$sql="SELECT * from charolas where disponible = 1 and n_carga = '$carga' ORDER BY n_charola";
	$result=mysqli_query($conexion,$sql);
?>
	<select class="form-control" id="lista3" name="lista3">
	<?php
			while ($row = mysqli_fetch_array($result))
			{
				?>
					<option value="<?php echo $row['n_charola']; ?>"><?php echo $row['n_charola']; ?></option>
				<?php
			}
		?>
	</select>
<?php
?>
