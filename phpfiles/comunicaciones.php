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

	//////////////hasta aqui conexion///////
	
	
	
	
?>

<?php
//como precaucion hay que asegurarse de que un usuario ha iniciado sesión
if(isset($_SESSION['username'])){
	tipoUsuario($con, $_SESSION['username']);
}
	listaComs($con);
?>

<?php
	mysqli_close($con);
	include "pie.php";
?>
