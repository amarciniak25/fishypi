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
	<?php $currentPage=basename($_SERVER['PHP_SELF']); // looks up the name of the current page?>
	<?php include("menu.php"); ?>
	
	<!--Saves the temperature in to a cookies-->
	<?php
	if(isset($_COOKIE["temp"])) {
		$temp=$_COOKIE["temp"];
	}
		else{
			$temp = "";
		}
	?>
	
	<div id ="main">
	<!--Form for the temperature-->
	<form name="temp" onsubmit="return validateTemp()" action="savetemp.php" method="post">
		<p><strong>Target temperature:</strong></p>
		<input type="text" name="temp" value="<?php echo $temp; ?>">
		<input type="submit" value="Submit">
	</form><br>
	<!--Form for the light color-->
	<form name="lightColor" onsubmit="return validateColor()" action="savecolor.php" method="post">
	<p><strong>Select light color:</strong></p>
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
	<!--This buttons will use ajax to operate relays this is why they are not in a form -->
    <td><button type="button"id="relay1">On</button></td>		
    <td><button type="button"id="relay2">Off</button></td> 
  </tr>
  </table>
  </div>
	<div id ="footer">
	
		
	</div>
</body>
