<?php
$OUTPUT_FILENAME = "Data/Temperature.txt";
$temp = $_POST['temp'];
file_put_contents($OUTPUT_FILENAME, $temp);
setcookie("temp", $temp);

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=./ManualControl.php">
</head>
<body></body>

</html>