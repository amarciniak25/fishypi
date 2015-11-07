<?php
$OUTPUT_FILENAME = "Data/Color.txt";
$color = $_POST['lights'];
file_put_contents($OUTPUT_FILENAME, $color);

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=./ManualControl.php">
</head>
<body></body>

</html>