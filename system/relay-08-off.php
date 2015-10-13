<?php
  #This scipt turns pin 7 (GPIO 4) off
  system("gpio mode 7 out");
  system("gpio write 7 1");
?>
