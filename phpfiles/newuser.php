<?php

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
	if(isset($_POST['username'])){
	if(buscar($con, $_POST['username'])){	
		insertar($con,$_POST['nombre'],$_POST['apellido1'],$_POST['org_id'], $_POST['email'],$_POST['username'], $_POST['passwd']);
		header ('Location: index.php?opcion=2');
	}else{
		echo "<h3>nombre de usuario ya en uso</h3>";
		unset($_POST['username']);
	}}


?>
<html>
<script src="../javascript/funciones.jss"></script>
<body>
<form name="nuevousuario" onsubmit="return validacion()" method ="post" action="newuser.php">
<p>Nombre
<input name="nombre" type="text" /><br>
</p>
<p>Apellido
<input name="apellido1" type="text" /><br>
</p>
<p>Organización
<select name="org_id">
	<option value="1">Universitat de Valencia</option>
	<option value="2">Ilerna Online</option>
	<option value="3">Smithsonian</option>
	<option value="4">UNED</option>
	<option value="5">Hogwarts</option>
	<option value="6">La la land</option>
</select><br>
</p>

<p>Email
<input name="email" type="email" /><br>
</p>
<p>Username
<input name="username" type="text" /><br>
</p>
<p>Password
<input name="passwd" type="password" /><br>
</p>
<input type="submit" value="enviar"/>
<input type="reset" value="reset"/>
</form>
</body>
</html>
