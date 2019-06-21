<?php


function insertar($con, $nombre, $apellido1, $org_id, $email, $username, $passw ){
	$sentencia = "insert into usuarios (nombre, apellido1, org_id, email, username, passw) values ('$nombre', '$apellido1', $org_id, '$email', '$username', '$passw')";

	if(mysqli_query($con, $sentencia)){
		//insertar ahora en la tabla de participantes
		//$sentencia = "insert into participantes (usuario_id) values (usuario_id2´-ç);
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

function tipoUsuario($con, $username){
	$sentencia="SELECT participantes.part_id, usuarios.apellido1 from usuarios JOIN participantes where 
	usuarios.usuario_id=participantes.part_id and usuarios.username='$username'";
	$res=$con->query($sentencia);
	if($res->num_rows > 0){
	while($fila = $res->fetch_assoc()) {
    		$_SESSION['part_id']=$fila['part_id'];
			tieneCom($con, 	$_SESSION['username']);
		}
	}else{
		echo "<h3>organizador</h3>";
	}
	
}


function tieneCom($con, $username){
	$sentencia="SELECT * FROM comunicacion join participantes join usuarios where comunicacion.part_id = participantes.part_id and participantes.usuario_id = usuarios.usuario_id and usuarios.username = '$username' and comunicacion.estado='aceptada'";
	$res=$con->query($sentencia);
	if($res->num_rows > 0){

		echo "<h3>tu comunicacion ha sido aceptada</h3>";
	}
	else{
		echo "<h3>Subir comunicacion</h3>";
		echo "<form method='post' action='comunicacionSubir.php'>
			
			<p>
			Tipo:
			<select name='tipo' required>
				<option value='oral'>Oral</option>
				<option value='poster'>Poster</option>
			</select>
			</p>
			
			<p>
			Tematica:
			<select name='tema_id' required>
				<option value='1'>sintesis polimerica</option>
				<option value='2'>analisis de polimeros</option>
				<option value='3'>materiales composites</option>
				<option value='4'>educacion y formacion</option>
			</select>
			</p>
			
			<p>
			Comunicacion:<input type='text' name='comunicacion' required />
			</p>
			
			<p>
			<textarea name='abstract' rows='20' cols='50' required></textarea>
			</p>
			
			<input type='submit'/>	
		</form>";
	}
}



//acabar
function subeCom($con, $comunicacion, $abstract,  $part_id, $tematica, $tipo){

	//$sentencia="insert into comunicacion (estado, abstract, comunicacion, part_id, tema_id, tipo, ) values ('pendiente', '$abstract', '$comunicacion', $part_id,$tematica, '$tipo'";

	$sentencia="insert into comunicacion (estado, comunicacion, abstract, tipo, part_id, tema_id) values ('pendiente','$comunicacion',
'$abstract','$tipo', $part_id, $tematica)";


	if(mysqli_query($con, $sentencia)){
		echo "<h3>comunicacion insertada</h3>";
	}else{
		echo "<h3>error al insertar</h3>";
	}
	

}

//acabar
function revisaCom(){

}




// muestra una lista de las comunicaciones disponibles.
function listaComs($con){
	$sentencia="select * from comunicacion";
	$res=$con->query($sentencia);
	//ahora recuperamos los datos en forma de array
	echo 'comunicaciones:<br>';
	while($fila = $res->fetch_assoc()) {
    		echo $fila['comunicacion'].'<a href="impreso.php?com='.$fila['com_id'].'"> Imprime </a> <br>';
		}
	
	
}
// busca una comunicacion y la muestra para ser impresa
function muestraCom($con, $com){
	$sentencia ="SELECT comunicacion.comunicacion, comunicacion.abstract, usuarios.nombre, usuarios.apellido1 from comunicacion, usuarios where comunicacion.part_id = usuarios.usuario_id and com_id='$com'";
	$res=$con->query($sentencia);

	$texto="";
	while($fila = $res->fetch_assoc()) {
		$texto=$texto.'<h1>'.$fila['comunicacion'].'</h1><br><p>
<strong>Autor:</strong> '.$fila['nombre'].' '.$fila['apellido1'].'</p><br><p><strong>Abstract:</strong><br>'.$fila['abstract'].'</p>';


    		return $texto;
	}
}

?>
