<?php
//consulta a base de datos empleando el parametro pasado por GET
	require '../vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	
	//recuperamos la identificación de la comunicación de la URL
	$com=$_GET['com'];

	//consultamos a la base de datos para recuperar una comunicación con com_id=com

	include "consultas.php";
	
	$host="localhost";
	$user="joan";
	$pass="joan";
	$bd="conferencia";

	//crea la conexion a la base de datos
	$con = new mysqli($host, $user, $pass, $bd);

	// Control de errores de la conexion 
	if ($con-> connect_errno){
		echo " la conexion ha fallado";
		exit();
	}

	//idioma de la base de datos
	$con->set_charset("UTF8");

	//////////////hasta aqui conexion///////

	$comunicacion=muestraCom($con, $com);



	$html2pdf = new Html2Pdf();
	$html2pdf->writeHTML($comunicacion);

	$html2pdf->output();

?>