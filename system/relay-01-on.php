<?php
  #This scipt turns pin 0 (GPIO 17) on
  system("gpio mode 0 out");
  system("gpio write 0 0");
?>
