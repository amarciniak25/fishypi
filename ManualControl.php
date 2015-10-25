<!DOCTYPE html>
<html>

<head>
   <title>Fishy Pi</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" />
  <script src="./javascript/ManualControlValidations.js"></script>
</head>

<body>
	<div id = "header">
		<h1>Fishy Pi</h1>
	</div>
	
	<div id ="nav">
	<ul>
    	<li><a href="./index.html">Home</a></li>
		<li><a href="./Gallery.html">Gallery</a></li>
		<li><a href="./ManualControl.html">Manual Control</a></li>
		<li><a href="./Schedule.html">Schedule</a></li>
		<li><a href="./Products.html">Products</a></li>
	</ul>
	</div>
	<div id ="main">
	
	<form name="temp" onsubmit="return validateTemp()" method="post">
		Target temperature:<br>
		<input type="text" name="temp">
		<input type="submit" value="Submit">
	</form><br>
	
	<form name="lightColor" onsubmit="return validateColor()" method="post">
	Select light color:<br>
	<select name="lights" id="lights">
		<option value=""></option>
		<option value="blue">Blue</option>
		<option value="yellow">Yellow</option>
		<option value="pink">Pink</option>
		<option value="white">White</option>
	</select>
	<input type="submit" value="Submit">
	</form><br>
	
	<table>
	<tr>
    <th>Relay</th>
    <th>On</th>		
    <th>Off</th>
  </tr> 
 <tr>
    <td>1</td>
    <td><button type="button"id="relay1">On</button></td>		
    <td><button type="button"id="relay2">Off</button></td>
  </tr>
  </table>
	<div id ="footer">
	
		<a href="http://validator.w3.org/check?uri=referer">Validate HTML</a> 
		<a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a>
	
	</div>
</body>
