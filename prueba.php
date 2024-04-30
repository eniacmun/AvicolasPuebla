<meta charset='utf-8'>
<?php
    $self = $_SERVER['PHP_SELF'];
    header("Refresh: 21600; URL='$self'");
    require 'conexion/conexion.php';
    $consulta = $conexion -> 	query('select * FROM maquina');
    $huevos = $conexion -> query('select * FROM huevos');
    $id_carga = 'C1M1';
    $arr1 = str_split($id_carga);
    echo $id_carga;
    $i=0;
    while($i<10){
            echo $arr1[3]++;
            $id_carga3 = implode($arr1);
            echo $id_carga3;
            $i++;      
    }
    



$miFecha= date("Y-m-d H:i:s");

echo 'Antes de setlocale strftime devuelve: '.strftime(str_replace('-','/', $miFecha)).'<br/>';

echo 'Antes de setlocale date devuelve: '.date(str_replace('-','/',"l, d-m-Y (H:i:s)", $miFecha)).'<br/>';

setlocale(LC_ALL,"es_ES");

echo 'Después de setlocale es_ES date devuelve: '.date(str_replace('-','/',"l, d-m-Y (H:i:s)", $miFecha)).'<br/>';

echo 'Después de setlocale es_ES strftime devuelve: '.strftime(str_replace('-','/',"%A, %d de %B de %Y", $miFecha)).'<br/>';

setlocale(LC_ALL,"es_CO.utf8");

echo 'Después de setlocale es_ES.UTF-8 date devuelve: '.date(str_replace('-','/',"l, d-m-Y (H:i:s)", $miFecha)).'<br/>';

echo 'Después de setlocale es_ES.UTF-8 strftime devuelve: '.strftime(str_replace('-','/',"%A, %d de %B de %Y", $miFecha)).'<br/>';

setlocale(LC_TIME, 'de_DE.UTF-8');

echo 'Después de setlocale de_DE.UTF-8 date devuelve: '.date("l, d-m-Y (H:i:s)", $miFecha).'<br/>';

echo 'Después de setlocale de_DE.UTF-8 strftime devuelve: '.strftime("%A, %d de %B de %Y", $miFecha).'<br/>';

?>