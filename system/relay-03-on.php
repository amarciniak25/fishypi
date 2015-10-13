<?php
  #This scipt turns pin 2 (GPIO 27) on
  system("gpio mode 2 out");
  system("gpio write 2 0");
?>
