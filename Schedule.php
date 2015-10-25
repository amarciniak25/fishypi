<!DOCTYPE html>
<html>

<head>
   <title>Fishy Pi</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" />
  <script src="./javascript/ScheduleValidations.js"></script>
  
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
	<p>Enable schedule</p>
	<form onsubmit="return ValidateRelays()" method="post">
	<table style="width:100%">
<tr>
    <th>Relay</th>
    <th>On</th>		
    <th>Off</th>
  </tr> 
 <tr>
    <td>1</td>
    <td><input type="radio" name="schedule1" id ="schedule1Yes" value="yes"></td>		
    <td><input type="radio" name="schedule1" id ="schedule1No" value="no"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="radio" name="schedule2" id ="schedule2Yes" value="yes"></td>		
    <td><input type="radio" name="schedule2" id ="schedule2No" value="no"></td>
  </tr>
  <tr>
    <td>3</td>
    <td><input type="radio" name="schedule3" id ="schedule3Yes" value="yes"></td>		
    <td><input type="radio" name="schedule3" id ="schedule3No" value="no"></td>
  </tr>
  <tr>
    <td>4</td>
    <td><input type="radio" name="schedule4" id ="schedule4Yes" value="yes"></td>		
    <td><input type="radio" name="schedule4" id ="schedule4No" value="no"></td>
  </tr>
  <tr>
    <td>5</td>
    <td><input type="radio" name="schedule5" id ="schedule5Yes" value="yes"></td>		
    <td><input type="radio" name="schedule5" id ="schedule5No" value="no"></td>
  </tr>
  <tr>
    <td>6</td>
    <td><input type="radio" name="schedule6" id ="schedule6Yes" value="yes"></td>		
    <td><input type="radio" name="schedule6" id ="schedule6No" value="no"></td>
  </tr>
  <tr>
    <td>7</td>
    <td><input type="radio" name="schedule7" id ="schedule7Yes" value="yes"></td>		
    <td><input type="radio" name="schedule7" id ="schedule7No" value="no"></td>
  </tr>
  <tr>
    <td>8</td>
    <td><input type="radio" name="schedule8" id ="schedule8Yes" value="yes"></td>		
    <td><input type="radio" name="schedule8" id ="schedule8No" value="no"></td>
  </tr> 
</table><br>
  <input type="submit" value="Submit">
</form>

	</div>
	<div id ="footer">
	
		<a href="http://validator.w3.org/check?uri=referer">Validate HTML</a> 
		<a href="http://jigsaw.w3.org/css-validator/check/referer">Validate CSS</a>
		
	</div>
</body>