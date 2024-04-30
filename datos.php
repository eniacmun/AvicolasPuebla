<?php
require 'conexion/conexion.php';
$maquina=$_POST['maquina'];

	//$sql="SELECT * from t_mundo  where id_continente='$continente'";
	//$consulta2 = $conexion -> query('select * FROM cargas where disponible = 1 and id_maquina = '$maquina'')
	$sql="SELECT * from cargas  where id_maquina = '$maquina'";
	$result=mysqli_query($conexion,$sql);
?>
	<select class="form-control" id="lista2" name="lista2">
	<?php
			while ($row = mysqli_fetch_array($result))
			{
				?>
					<option value="<?php echo $row['id_carga']; ?>"><?php echo $row['n_carga']; ?></option>
				<?php
			}
		?>
	</select>
	<div class="control-group">
			<div class="form-group floating-label-form-group controls mb-0 pb-2">
				Selecciona una charola disponible de la carga<div id="select3lista"></div>
			</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#lista2').val(1);
			recargarLista2();

			$('#lista2').change(function(){
				recargarLista2();
			});
		})
	</script>
	<script type="text/javascript">
		function recargarLista2(){
			$.ajax({
				type:"POST",
				url:"datos2.php",
				data:"carga=" + $('#lista2').val(),
				success:function(r){
					$('#select3lista').html(r);
				}
			});
		}
	</script>
<?php
?>
