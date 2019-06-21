<?php
include "cabecera.php";
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
	
	subeCom($con, $_POST['comunicacion'], $_POST['abstract'],$_SESSION['part_id'], $_POST['tema_id'], $_POST['tipo']);


?>