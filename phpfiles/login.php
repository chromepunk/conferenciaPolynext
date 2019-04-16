<?php
	session_destroy();
	session_start();

	include "cabecera.php";

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

	include "consultas.php";
	if(isset($_POST['username']) && isset($_POST['passw'])){
		login($con, $_POST['username'], $_POST['passw']);	
	}

?>
<html>
<body>
<?php
	if(isset($_SESSION['error'])){
		echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
		unset($_SESSION['error']);
	}
?>
<p> Por favor introduce usuario y contraseña </p>
<form method="post">
	<p>Usuario: 
	<input type="text" name="username" required>
	</p>
	<p>Contraseña: 
	<input type="password" name="passw" value="potasio" required>
	</p>
	<input type="submit" placeholder="enviar">
</form>
</body>
</html>

<?php include "pie.php"; ?>
