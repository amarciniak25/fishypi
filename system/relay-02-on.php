<?php
  #This scipt turns pin 1 (GPIO 18) on
  system("gpio mode 1 out");
  system("gpio write 1 0");
?>
