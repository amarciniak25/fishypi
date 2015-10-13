<?php
  #This scipt turns pin 6 (GPIO 25) on
  system("gpio mode 6 out");
  system("gpio write 6 0");
?>
