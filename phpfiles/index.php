<?php
	include "cabecera.php";
?>

<div style="padding:0 16px;">
  <h2>Responsive Topnav Example</h2>
  <p>This example use media queries to stack the topnav vertically when the screen size is 600px or less.</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
  <h4>Resize the browser window to see the effect.</h4>

<?php  
		if($_GET['opcion']==2){
			echo '<p style="color:green"><h3>Usuario Registrado!</h3></p>';}
		echo '<p style="color:green">'.$_SESSION['exito']."</p>\n";
?>

</div>
<?php 
	include "pie.php";
?>
