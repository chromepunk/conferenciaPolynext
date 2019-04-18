
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
</head>
<body>

<div class="header">
	<h1>polyNext</h1>
</div>


<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="javascript:alert('hola')">Conferencias</a></li>
  <li><a href="#contact">Posters</a></li>
<?php
	if(isset($_GET["username"])){
	echo ' <li class="right"><a href="index.php?opcion=1">,desconectar</a></li>';
	echo ' <li class="right"><a href="login.php">bienvenido/a, '.$_GET["username"].'</a></li>';
}else{

	echo ' <li class="right"><a href="login.php">Login</a></li>';
}
?>
</ul>
