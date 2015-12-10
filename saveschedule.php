<?php // saves light schedule information to file 
$OUTPUT_FILENAME = "Data/Schedule.txt";
$schedule1 = $_POST['schedule1'];
$schedule2 = $_POST['schedule2'];
$schedule3 = $_POST['schedule3'];
$schedule4 = $_POST['schedule4'];
$schedule5 = $_POST['schedule5'];
$schedule6 = $_POST['schedule6'];
$schedule7 = $_POST['schedule7'];
$schedule8 = $_POST['schedule8'];

file_put_contents($OUTPUT_FILENAME, $schedule1 . " ");
file_put_contents($OUTPUT_FILENAME, $schedule2 . " ", FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule3 . " ", FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule4 . " ", FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule5 . " ", FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule6 . " ", FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule7 . " ", FILE_APPEND);
file_put_contents($OUTPUT_FILENAME, $schedule8, FILE_APPEND);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=./Schedule.php">
</head>
<body></body>

</html>