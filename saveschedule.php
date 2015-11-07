<?php
$OUTPUT_FILENAME = "Data/Schedule.txt";
$schedule1 = $_POST['scgedule1'];
$schedule2 = $_POST['scgedule2'];
$schedule3 = $_POST['scgedule3'];
$schedule4 = $_POST['scgedule4'];
$schedule5 = $_POST['scgedule5'];
$schedule6 = $_POST['scgedule6'];
$schedule7 = $_POST['scgedule7'];
$schedule8 = $_POST['scgedule8'];

file_put_contents($OUTPUT_FILENAME, $schedule1);
file_put_contents($OUTPUT_FILENAME, $schedule2, FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule3, FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule4, FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule5, FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule6, FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule7, FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule8, FILE_APPEND);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=./ManualControl.php">
</head>
<body></body>

</html>