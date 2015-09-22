<?php
  #This scipt turns pin 0 (GPIO 17) off
  system("gpio mode 0 out");
  system("gpio write 0 1");
?>
