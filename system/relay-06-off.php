<?php
  #This scipt turns pin 5 (GPIO 24) off
  system("gpio mode 5 out");
  system("gpio write 5 1");
?>
