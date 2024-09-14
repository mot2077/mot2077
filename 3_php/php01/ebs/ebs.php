<!DOCTYPE html>
<html lang="de">
  <head>
	<meta charset="UTF-8">
	<title>EBS</title>
	<link rel="stylesheet" href="format.css" type="text/css">
  </head>
  <body>
  <h1>Die Erich-Bracher-Schule</h1>
<div class="datum">
	<!--
    <h2 class = .mittig>Heute ist der <?php echo date("l, d.F.Y");?> </h2>
	
	<?php
		echo "<h2>Heute ist der " . date("d.m.Y") . "</h2>";
	?>
	-->
	<?php
	$wochentag = date("l");
	$datum = date("d.M.Y");
	echo "<h2>Heute ist $wochentag der $datum</h2>";
	?>


</div>
	<table>
	<tr><th colspan="3">Schularten der EBS</th></tr>
	  <tr><td>kaufmännische Berufsschule</td>
	  <td>kaufmännische Berufskollegs</td>
	  <td>Wirtschaftsgymnasium</td></tr>
	</table>
	<h4>Folgende Fächer sind Kernfächer</h4>
	<ul>
	  <li>Englisch</li>
	  <li>Deutsch</li>
	  <li>Mathematik</li>
	  <li>Betriebswirtschaftslehre</li>
	</ul>
	<div class="mittig">
	  <img src="bilder/EBS.jpg" alt="Bild der Erich-Bracher-Schule">
	</div>
  </body>
</html>