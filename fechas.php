<?php
	$fechaDeOrigen = date("Y-m-d");
	$menosTresDias = date ('d-m-Y', strtotime ('- 3 day', strtotime($fechaDeOrigen)));
	$mas31Dias = date ('d-m-Y', strtotime ('+ 31 day', strtotime($fechaDeOrigen)));
	$masOchoDias = date ('d-m-Y', strtotime ('+ 8 day', strtotime($fechaDeOrigen)));
	$menosSeisSemanas = date ('d-m-Y', strtotime ('- 6 week', strtotime($fechaDeOrigen)));
	$masCuatroSemanas = date ('d-m-Y', strtotime ('+ 4 week', strtotime($fechaDeOrigen)));
	$menosDiezMeses = date ('d-m-Y', strtotime ('- 10 month', strtotime($fechaDeOrigen)));
	$masVeinticuatroMeses = date ('d-m-Y', strtotime ('+ 24 month', strtotime($fechaDeOrigen)));
	$menosCincoAnnos = date ('d-m-Y', strtotime ('- 5 year', strtotime($fechaDeOrigen)));
	$masSieteAnnos = date ('d-m-Y', strtotime ('+ 7 year', strtotime($fechaDeOrigen)));
	
	header('Content-Type: text/html; charset=UTF-8');

	echo utf8_encode("Fecha original: ".$fechaDeOrigen."<br />");
	echo utf8_encode("Fecha original en formato español: ".date('d-m-Y', strtotime($fechaDeOrigen))."<br />");
	echo utf8_encode("Fecha menos tres días: ".$menosTresDias."<br />");
	echo utf8_encode("Fecha mas 31 días: ".$mas31Dias."<br />");
	echo utf8_encode("Fecha más ocho días: ".$masOchoDias."<br />");
	echo utf8_encode("Fecha menos seis semanas: ".$menosSeisSemanas."<br />");
	echo utf8_encode("Fecha más cuatro semanas: ".$masCuatroSemanas."<br />");
	echo utf8_encode("Fecha menos diez meses: ".$menosDiezMeses."<br />");
	echo utf8_encode("Fecha más veinticuatro meses: ".$masVeinticuatroMeses."<br />");
	echo utf8_encode("Fecha menos cinco años: ".$menosCincoAnnos."<br />");
	echo utf8_encode("Fecha más siete años: ".$masSieteAnnos."<br />");
?>
