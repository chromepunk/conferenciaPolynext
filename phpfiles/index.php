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
<div class="column">
	  <p >sciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>
</div>
<div class="column">
  <p>sciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>
</div>
<div class="column">
  <p>sciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>
</div>

<?php  
		if($_GET['opcion']==2){
			echo '<p style="color:green"><h3>Usuario Registrado!</h3></p>';}
		echo '<p style="color:green">'.$_SESSION['exito']."</p>\n";
?>


<script src="../javascript/slideshow.js"></script>
<?php 
	include "pie.php";
?>
