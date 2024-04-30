<?php
    require 'conexion/conexion.php';
    $consulta = $conexion -> 	query('select * FROM maquina');
    $huevos = $conexion -> query('select * FROM huevos');

    for ($i = 1; $i <= 5; $i++) {
      for ($j = 1; $j <= 6; $j++) {
        for ($k = 1; $k <= 60; $k++) {
          $charola="CH".$k;
          $n_maquina="M".$i;
          $n_carga="C".$j;
          $id_carga=$n_carga.$n_maquina;
          $id_charola=$charola.$n_carga.$n_maquina;
          $capacidad = "150";
          $insert = $conexion -> query("insert into charolas(id_charola, n_charola, n_maquina, n_carga, capacidad) VALUES('$id_charola','$k', '$n_maquina', '$id_carga','$capacidad');");
          if (! $insert ) {
               return "Error no inserto, ";
          }
        }
      }
    }
?>