<!DOCTYPE>
<?php
	session_start();
	if($_GET['opcion']==1){
		session_unset();
		session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/stilo1.css">
<link rel="stylesheet" href="../css/conferencia.css">
<link rel="stylesheet" type="text/css" href="../css/slideshow.css">
</head>
<body>

<div class="header">
	<h1>polyNext</h1>
	<h3>XXII Congreso para el avance y difusión en investigación y tecnología de polimeros. 22 al 29 de Julio, Valencia</h3>
</div>


<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="conferencias.php">Conferencias</a></li>
  <li><a href="comunicaciones.php">Comunicaciones</a></li>
<?php
	if(isset($_SESSION["username"])){
	echo ' <li class="right"><a href="index.php?opcion=1">,desconectar</a></li>';
	echo ' <li class="right"><a href="login.php">bienvenido/a, '.$_SESSION["username"].'</a></li>';
}else{

	echo ' <li class="right"><a href="login.php">Login</a></li>';
}
?>
</ul>

