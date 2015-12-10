<!--Visible indication to tell the user of their location on the website -->
<?php
	if ($currentPage == "index.php")
		$indexStyle = "currentPage";
	if ($currentPage == "Gallery.php")
		$galleryStyle = "currentPage";
	if ($currentPage == "ManualControl.php")
		$manualcontrolStyle = "currentPage";
	if ($currentPage == "Schedule.php")
		$scheduleStyle = "currentPage";
	if ($currentPage == "Products.php")
		$productsStyle = "currentPage";
?>




<!--Navigation menu -->

<div id ="nav">
	<ul>
    	<li><a class="<?php echo $indexStyle;?>" href="./index.php">Home</a></li>
		<li><a class="<?php echo $galleryStyle;?>" href="./Gallery.php">Gallery</a></li>
		<li><a class="<?php echo $manualcontrolStyle;?>" href="./ManualControl.php">Manual Control</a></li>
		<li><a class="<?php echo $scheduleStyle;?>" href="./Schedule.php">Schedule</a></li>
		<li><a class="<?php echo $productsStyle;?>" href="./Products.php">Products</a></li>
	</ul>
</div>