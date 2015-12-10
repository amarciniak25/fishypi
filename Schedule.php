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
	<?php $currentPage=basename($_SERVER['PHP_SELF']);// looks up the name of the current page?>
	<?php include("menu.php"); ?>
	
	<div id ="main">
	<p><strong>Enable schedule</strong></p>
	<!-- Form for the light schedule-->
	<form onsubmit="return ValidateRelays()" action="saveschedule.php" method="post">
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
	
	</div>
</body>