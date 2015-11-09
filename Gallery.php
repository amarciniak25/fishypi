<!DOCTYPE html>
<html>

<head>
   <title>Fishy Pi</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" />
  <script src="./javascript/gallery.js"></script>
</head>

<body onload="loadGallery()" >
	<div id = "header">
		<h1>Fishy Pi</h1>
	</div>
	
	<?php include("menu.php"); ?>
	
	<div id = "main">
	
	<table class = "gallery">
	<tr>
	<td><img id = "myP1" onclick="changeImage1()" onmouseover="crosshair()" src="Gallery/relaywiring.jpg" alt="Wiring the relay" width="300" height="300"></td>
	<td><img id = "myP2" onclick = "changeImage2()" onmouseover= "crosshair()" src="Gallery/Box.jpg" alt="Outlet box" width="300" height="300"></td>
	<td><img id = "myP5" onclick = "changeImage5()" onmouseover="crosshair()" src="Gallery/systeminaction.jpg" alt="System in action" width="300" height="300"></td>
	</tr>
	<tr>
	<td><img id = "myP3" onclick = "changeImage3()" onmouseover="crosshair()" src="Gallery/Outlets.jpg" alt ="Outlets installed" width="300" height="300"></td>
	<td><img id = "myP4" onclick = "changeImage4()" onmouseover="crosshair()" src="Gallery/relayboard.jpg" alt="Relay board" width="300" height="300"></td>
	<td><img id = "myP6" onclick = "changeImage6()" onmouseover="crosshair()" src="Gallery/aquarium.jpg" alt="Aqurium" width="300" height="300"></td>
	</tr>
	</table>
	
	</div>
	
	
	
	<div id ="footer">

		<a href="http://validator.w3.org/check?uri=referer">Validate HTML</a> 
		<a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a>
	
	</div>
</body>