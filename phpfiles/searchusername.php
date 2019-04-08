
<?php
require_once "pdo.php";
session_start();

if(isset($_POST['username'])){
	$stmt = $pdo->prepare("SELECT nombre FROM usuarios where username = :xyz");
	$stmt->execute(array(":xyz" => $_POST['username']));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if ( $row === false ) {
		$_SESSION['error'] = 'no existe ese usuario';
		header( 'Location: searchusername.php' ) ;
		return;
	}
	$_SESSION['success'] = 'si que existe!';
}

?>


<?php
	include "cabecera.php";
?>

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
<p> search Username </p>
<form method="post">
	<input type="text" name="username">
	<input type="submit">
</form>
</body>
</html>
