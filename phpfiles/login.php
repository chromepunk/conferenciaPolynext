<?php
require_once "pdo.php";
session_start();

if(isset($_POST['username']) && isset($_POST['passw'])){
	$stmt = $pdo->prepare("SELECT nombre FROM usuarios where username = :user and passw=:pass");
	$stmt->execute(array(
		":user" => $_POST['username'],
		":pass" => $_POST['passw']
		));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if ( $row === false ) {
		$_SESSION['error'] = 'usuario-contraseña incorrecta';
		header( 'Location: login.php' ) ;
		return;
	}
	$_SESSION['success'] = 'bienvenido '.$_POST['username'];
}

?>


<html><head></head>
<body>

<?php
	if(isset($_SESSION['error'])){
		echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
		unset($_SESSION['error']);
	}
	if(isset($_SESSION['success'])){
		echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
		unset($_SESSION['success']);
	}
?>
<p> Por favor introduce usuario y contraseña </p>
<form method="post">
	<p>Usuario: 
	<input type="text" name="username" required>
	</p>
	<p>Contraseña: 
	<input type="password" name="passw" required>
	</p>
	<input type="submit" placeholder="enviar">
</form>
</body>
</html>
