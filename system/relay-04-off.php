<?php
  #This scipt turns pin 3 (GPIO 22) off
  system("gpio mode 3 out");
  system("gpio write 3 1");
?>
