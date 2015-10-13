<?php
  #This scipt turns pin 2 (GPIO 27) off
  system("gpio mode 2 out");
  system("gpio write 2 1");
?>
