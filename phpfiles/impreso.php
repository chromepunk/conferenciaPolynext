<?php
//consulta a base de datos empleando el parametro pasado por GET
	require '../vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	
	$html2pdf = new Html2Pdf();
	$html2pdf->writeHTML("hello world");

	$html2pdf->output();

?>