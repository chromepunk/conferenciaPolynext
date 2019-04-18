<?php


function insertar($con, $nombre, $apellido1, $org_id, $email, $username, $passw ){
	$sentencia = "insert into usuarios (nombre, apellido1, org_id, email, username, passw) values ('$nombre', '$apellido1', $org_id, '$email', '$username', '$passw')";

	if(mysqli_query($con, $sentencia)){
	}else{
		echo "<h3>error al insertar</h3>";
	}
}

function buscar($con, $username){

	$sentencia="select usuario_id from usuarios where username='$username'";
	$res=$con->query($sentencia);
	if($res->num_rows > 0){
		return false;
		}else{ 
			return true;
		}
}

function login($con, $username, $passw){
	$sentencia="select usuario_id from usuarios where username='$username' and passw='$passw'";
	$res=$con->query($sentencia);
	if($res->num_rows > 0){
		$_SESSION['exito'] = 'bienvenido, '.$_POST['username'];
		$_SESSION['username'] = $_POST['username'];
		header ('Location: index.php?username='.$_POST['username']);
		}else{ 
			echo "usuario o contraseña incorrectas";
			$_SESSION['error'] = 'usuario-contraseña incorrecta';
		}


}
function subeComunicacion($con){

}
?>
