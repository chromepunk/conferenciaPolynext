<?php
	include "cabecera.php";
?>

<div style="padding:0 16px;">
	<!-- Contenedor del slideshow, basado en ejemplo de w3schools -->
	<div class="slideshow-container">
		<!-- div que contiene cada una de las imagenes -->
		<div class="mislide fade">
			<div class="numero">1</div>
			<img class="ima" src="../images/telas.jpg" style="width:100%;">
			<div class="texto">telas everywhere</div>
		</div>
		<div class="mislide fade">
			<div class="numero">2</div>
			<img class="ima" src="../images/plasticos.jpg" style="width:100%;">
			<div class="texto"></div>
		</div>
		<div class="mislide fade">
			<div class="numero">3</div>
			<img class="ima" src="../images/ciudad_ciencias.jpg" style="width:100%;">
			<div class="texto"></div>
		</div>

		<!-- botones para navegar por el slideshow -->
		<a class="prev" onclick="plusSlides(-1)" >&#10094</a>
		<a class="next" onclick="plusSlides(1)" >&#10095</a>

		<!-- puntos de navegacion slideshow -->
		<div style="text-align:center;">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
	</div>
</div>
  <h2>Responsive Topnav Example</h2>
  <p>This example use media queries to stack the topnav vertically when the screen size is 600px or less.</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
  <h4>Resize the browser window to see the effect.</h4>

<?php  
		if($_GET['opcion']==2){
			echo '<p style="color:green"><h3>Usuario Registrado!</h3></p>';}
		echo '<p style="color:green">'.$_SESSION['exito']."</p>\n";
?>


<script src="../javascript/slideshow.js"></script>
<?php 
	include "pie.php";
?>
