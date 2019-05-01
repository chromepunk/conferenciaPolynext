<?php
	include "cabecera.php";
	

?>

<?php

$titulo = '<h1>New Horizons in Polymeric Biosinthesis</h1>';
$autor = '<h3>Sandra Evans</h3>';
$org = '<h3>Smithsonian<h3>';
$abs= '<strong>Abstract:</strong>
<p>
sciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>';

if(isset($_POST['imprime'])){
	$html2pdf = new Html2Pdf();
	$html2pdf->writeHTML($titulo.' '.$abs);
		$html2pdf->writeHTML("hello world");

	$html2pdf->output('abstract.pdf','D');
}


?>
<p>
<form method="post" action="impreso.php">
<input type="submit" name="imprime" value="imprime"/>
</form>
</p>

<?php
	include "pie.php";
?>