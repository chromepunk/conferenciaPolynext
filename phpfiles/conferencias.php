<?php
include "cabecera.php";

?>

<div class="contienecal">
<table class="cal">
	<caption>Julio 2019</caption>
	<thead>
		<tr>
			<th>lunes</th>
			<th>martes</th>
			<th>miercoles</th>
			<th>jueves</th>
			<th>viernes</th>
			<th>sabado</th>
			<th>domingo</th>
		</tr>
	</thead>
	<tbody>

<?php
/* array asociativo que contiene para cada dia (key) una actividad asociada (value) y que se inserta en el calendario*/

$agenda = array("21"=>
"bienvenida al congreso Polynext 2019, se servirá un coctel en el hall del hotel a las 20:00h mientras se disfruta de la actuación en directo de la orquesta Ampa y las Polymerettes. Tras ello se hará el brindis inauguracional", 

"22"=>" 09:00, Conferencia <strong>'Fronteras de sintesis polimérica: paradigmas de construcción'</strong> a cargo del doctor Filemon Ibañez de Universidad de Pernambuco.
10:15, Conferencia 'Herramientas de simulación para el investigador en tecnología de polimeros' a cargo de la doctora Estefania Fenez.
11:00, Coffee Break en el Hall del hotel",
"23"=>" 09:00, Conferencia <strong>'El analísis de momentos de inercia pink cotton'</strong> a cargo del doctor Mortadelo Pérez de Universidad de Marlborough.
10:15, Conferencia 'Herramientas de simulación para el investigador en tecnología de polimeros' a cargo de la doctora Estefania Fenez.
11:00, Coffee Break en el Hall del hotel",
"24"=>" 09:00, Ky <strong>'El aprendizaje en el laboratorio: Talleres interactivos de estudio de parametros de sintesis'</strong> a cargo del profesor Bacterius Pi del Consejo de investigaciones aeroterráqueas. Universidad de Pernambuco.
10:15, Conferencia <strong>'Workshop Matlab: Un conjunto de técnicas útiles'<strong> a cargo de Joe Smithsonian .
11:00, Coffee Break en el Hall del hotel",

"28"=>"Despedida, se ofrecerá una merienda cena y se presentará el siguiente congreso");

/*fragmento de codigo para generar una tabla que contenga los 31 dias del mes de julio, en filas de 7 dias*/
	echo'<tr>';
	for($i =1; $i<=31;$i++){
		if(array_key_exists($i,$agenda)){
			echo '<td class="redletter">'.$i.'</td>';}else{
			echo '<td>',$i.'</td>';}
		if($i%7==0){
			echo '</tr><tr>';
		}	
	}
	echo '</tr>';
?>
	</tbody>
</table>

</div>
<div class="nota">
<?php
	foreach($agenda as $dia => $actividad){
		echo '<p>Dia: '.$dia.', '.$actividad.'</p>';
}
?>
</div>
<?php


include "pie.php";
?>

