<?php
  #This scipt turns pin 4 (GPIO 23) on
  system("gpio mode 4 out");
  system("gpio write 4 0");
?>
